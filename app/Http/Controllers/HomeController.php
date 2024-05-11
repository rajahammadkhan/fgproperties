<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developers;
use App\Models\Projects;
use App\Models\Properties;
use App\Models\Amenities;
use App\Models\Blog;
use Illuminate\Support\Facades\Artisan;

use Illuminate\Console\Command;
use Illuminate\Contracts\Events\Dispatcher;
use TeamTNT\TNTSearch\TNTSearch;
use Illuminate\Support\Facades\Schema;

class HomeController extends Controller
{
    public function index()
    {   
        
        $data = [
            'developers_for_nav' => Developers::get(),
            
            'amenities'     =>     Amenities::limit(20)->get(),
            'developers'    =>     Developers::inRandomOrder()->limit(12)->get(),
            'Properties'    =>     Projects::where('featured', 1)->orderByDesc('id')->limit(6)->get(),
            'projects'      =>     Projects::get(),
            'blog'          =>     Blog::where('status',1)->limit(3)->orderBy('id', 'desc')->get(),
        ];
        return view('home', $data);
    }

    //for indexing projects model for search--start

    public function l()
    {   
        $class = Projects::class;

        $model = new $class();
        $tnt = new TNTSearch();
        $driver = $model->getConnectionName() ?: config('database.default');
        $config = config('scout.tntsearch') + config("database.connections.$driver");
        $db = app('db')->connection($driver);

        $tnt->loadConfig($config);
        $tnt->setDatabaseHandle($db->getPdo());

        if(!$model->count()) {
            $this->info('Nothing to import.');
            exit(0);
        }
        
        $indexer = $tnt->createIndex($model->searchableAs().'.index');
        $indexer->setPrimaryKey($model->getKeyName());

        $availableColumns = Schema::connection($driver)->getColumnListing($model->getTable());
        $desiredColumns = array_keys($model->first()->toSearchableArray());

        $fields = array_intersect($desiredColumns, $availableColumns);

        $query = $db->table($model->getTable());

        if ($fields) {
            $query->select($model->getKeyName())
                ->addSelect($fields);
        }

        $indexer->query($query->toSql());

        $indexer->run();
        dd('All ['.$class.'] records have been imported.');

    }

    //for indexing projects model for search--end
}

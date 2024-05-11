<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use App\Models\Projects;
use Illuminate\Console\Command;
use Illuminate\Contracts\Events\Dispatcher;
use TeamTNT\TNTSearch\TNTSearch;
use Illuminate\Support\Facades\Schema;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function(){
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
            // dd('All ['.$class.'] records have been imported.');
        });
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

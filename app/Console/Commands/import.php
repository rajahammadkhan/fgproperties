<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Projects;

class import extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Index Projects Model for search';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // dd(exec('php localhost/fgproperties(cssFix)/ artisan tntsearch:import App\Models\Projects'));
        // \Artisan::call('tntsearch:import', ['model' => Projects::class]);
        // return 0;
    }
}

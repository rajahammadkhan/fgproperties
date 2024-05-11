<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developers;
use App\Models\Projects;



class DevelopersController extends Controller
{
    public function index()
    {   
        $devs = Developers::get();
        $data = [];
        foreach ($devs as  $dev) 
        {
            $proj = Projects::where('developer_id', $dev->id)->get();
            $data += [
                strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '_', $dev->developer_name))) => $proj->count(),
            ];
        }
        $data += [
            'developers' => Developers::inRandomOrder()->get(),
            'developers_for_nav' => Developers::get(),
            
        ];
        return view('developer', $data);
    }
}

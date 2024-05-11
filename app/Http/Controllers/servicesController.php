<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developers;
use App\Models\Projects;
use App\Models\Properties;
use App\Models\Amenities;

class servicesController extends Controller
{

    public function index()
    {
        $data = [
            'developers_for_nav' => Developers::get(),
            
            'amenities'  => Amenities::limit(20)->get(),
            'developers' => Developers::inRandomOrder()->limit(12)->get(),

        ];
        return view('propertymanagement', $data);
    }
    
}

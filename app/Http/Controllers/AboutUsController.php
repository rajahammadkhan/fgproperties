<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developers;
use App\Models\Projects;
use App\Models\Properties;
use App\Models\Amenities;
use App\Models\Blog;


class AboutUsController extends Controller
{
     public function index()
    {   
        
        $data = [
            'amenities'  => Amenities::limit(20)->get(),
            'developers' => Developers::inRandomOrder()->limit(6)->get(),
            'developers_for_nav' => Developers::get(),
        ];
        return view('aboutus', $data);
    }
}

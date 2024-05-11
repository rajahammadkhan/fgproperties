<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Developers;

class BlogController extends Controller
{
    public function index()
    {
        $data = [
            'developers' => Developers::inRandomOrder()->limit(6)->get(),
            'blogs' =>  Blog::orderBy('id', 'desc')->get(),
            'popular_blogs' => Blog::inRandomOrder()->limit(3)->get(),
            'developers_for_nav' => Developers::get(),

        ];

        return view('blog',$data);
    }

     public function detail($slug)
    {
        $blog = Blog::where('slug',$slug)->first();
        $data = [
            'developers_for_nav' => Developers::get(),
            
            'blog' =>  Blog::where('slug',$slug)->first(),
            'similar_blogs' => Blog::inRandomOrder()->limit(2)->get(),
            'developers' => Developers::inRandomOrder()->limit(6)->get(),
            'meta_title'            =>  $blog->meta_title,
            'meta_description'      =>  $blog->meta_description,
            'keywords'              =>  $blog->keywords,

        ];

        return view('blogdetails',$data);
    }
}

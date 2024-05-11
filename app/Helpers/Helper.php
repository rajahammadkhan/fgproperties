<?php // Code within app\Helpers\Helper.php
use App\Models\Menu;
use App\Models\Settings;
use App\Models\Blog;


if (!function_exists('getCurrentMenu')) {
    function getCurrentMenu($route)
    {
        return Menu::where('route',$route)->first() ?? null;
    }
}

if (!function_exists('getSettings')) {
    function getSettings($key)
    {
        return Settings::where('setting_key',$key)->first()->setting_value;
    }
}

if (!function_exists('getCurrentBlog')) {
    function getCurrentBlog($slug)
    {
        return Blog::where('slug',$slug)->first();
        
    }
}

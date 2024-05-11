<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Models\Properties;
use App\Models\keywords;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class liveSearchController extends Controller
{
    public function searchRent(Request $request){
        
        if($request->ajax()) {
          
            $data = keywords::where('keyword', 'like', $request->location .'%')
                ->get('keyword');
           
            $output = '';
           
            if (count($data)>0) {
              
                $output = '<ul class="list-group rounded-lg" style="margin-top: 2.7rem;display: block; position: relative; z-index: 1;background-color:rgb(237,252,250,0.9);max-height:200px;overflow-Y:auto;border:solid 1px black;border-top:none; border-top-left-radius:0px; border-top-right-radius:0px; padding-left:2rem; cursor:pointer;">';
              
                foreach ($data as $row){
                   
                    $output .= '<li class="list-group-item it">'.$row->keyword.'</li>';
                }
              
                $output .= '</ul>';
            }
            else {
                $output = '<ul class="list-group rounded-lg" style="margin-top: 2.7rem;display: block; position: relative; z-index: 1;background-color:rgb(237,252,250,0.9);max-height:200px;overflow-Y:auto;border:solid 1px black;border-top:none; border-top-left-radius:0px; border-top-right-radius:0px; padding-left:2rem; cursor:pointer;">';
             
                $output .= '<li class="list-group-item">'.'No results'.'</li>';

                $output .= '</ul>';

            }
           
            return $output;
        }
    }

    public function searchBuy(Request $request){
        
        if($request->ajax()) {
          
            $data = keywords::where('keyword', 'like', $request->location .'%')
                ->get('keyword');
           
            $output = '';
           
            if (count($data)>0) {
              
                $output = '<ul class="list-group rounded-lg" style="margin-top: 2.7rem;display: block; position: relative; z-index: 1;background-color:rgb(237,252,250,0.9);max-height:200px;overflow-Y:auto;border:solid 1px black;border-top:none; border-top-left-radius:0px; border-top-right-radius:0px; padding-left:2rem; cursor:pointer;">';
              
                foreach ($data as $row){
                   
                    $output .= '<li class="list-group-item it">'.$row->keyword.'</li>';
                }
              
                $output .= '</ul>';
            }
            else {
                $output = '<ul class="list-group rounded-lg" style="margin-top: 2.7rem;display: block; position: relative; z-index: 1;background-color:rgb(237,252,250,0.9);max-height:200px;overflow-Y:auto;border:solid 1px black;border-top:none; border-top-left-radius:0px; border-top-right-radius:0px; padding-left:2rem; cursor:pointer;">';
             
                $output .= '<li class="list-group-item">'.'No results'.'</li>';

                $output .= '</ul>';

            }
           
            return $output;
        }
    }

    public function searchNewP(Request $request){
        
        if($request->ajax()) {
          
            $data = keywords::where('keyword', 'like', $request->location .'%')
                ->get('keyword');
           
            $output = '';
           
            if (count($data)>0) {
              
                $output = '<ul class="list-group rounded-lg" style="margin-top: 2.7rem;display: block; position: relative; z-index: 1;background-color:rgb(237,252,250,0.9);max-height:200px;overflow-Y:auto;border:solid 1px black;border-top:none; border-top-left-radius:0px; border-top-right-radius:0px; padding-left:2rem; cursor:pointer;">';
              
                foreach ($data as $row){
                   
                    $output .= '<li class="list-group-item it">'.$row->keyword.'</li>';
                }
              
                $output .= '</ul>';
            }
            else {
                $output = '<ul class="list-group rounded-lg" style="margin-top: 2.7rem;display: block; position: relative; z-index: 1;background-color:rgb(237,252,250,0.9);max-height:200px;overflow-Y:auto;border:solid 1px black;border-top:none; border-top-left-radius:0px; border-top-right-radius:0px; padding-left:2rem; cursor:pointer;">';
             
                $output .= '<li class="list-group-item">'.'No results'.'</li>';

                $output .= '</ul>';

            }
           
            return $output;
        }
    }

    public function searchBuyPage(Request $request){
        
        if($request->ajax()) {
          
            $data = keywords::where('keyword', 'like', $request->location .'%')
                ->get('keyword');
           
            $output = '';
           
            if (count($data)>0) {
              
                $output = '<ul>';
              
                foreach ($data as $row){
                   
                    $output .= '<li class="it px-6 hover:bg-white">'.$row->keyword.'</li>';
                }
              
                $output .= '</ul>';
            }
            else {
                $output = '<ul>';
             
                $output .= '<li class=" px-6 hover:bg-white">'.'No results'.'</li>';

                $output .= '</ul>';

            }
           
            return $output;
        }
    }
}
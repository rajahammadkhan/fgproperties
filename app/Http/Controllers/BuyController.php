<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properties;
use App\Models\Projects;
use App\Models\Developers;
use App\Models\Amenities;
use App\Models\Properties_To_Amenities;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use App\Models\propertyType;
use App\Models\keywords;

class BuyController extends Controller
{
    public function searchBuy(Request $request)
    {   
        $projects = collect();
        if($request->locationnew)
        {
            $projectss =  Projects::search($request->locationnew)->get();
            // $projectss =  Projects::search($request->locationnew)->get();
            foreach($projectss as $project)
            {
                $projects->push($project);
            }
        }
        if(($request->pricenew1) || ($request->pricenew2))
        {
            if(! $projects->isempty())
            {$projects = $projects->whereBetween('price',[$request->pricenew1 ? $request->pricenew1 : 0, $request->pricenew2 ? $request->pricenew2 : rand()]);}
            if( $projects->isempty())
            {
                $projectss =  Projects::whereBetween('price',[$request->pricenew1 ? $request->pricenew1 : 0, $request->pricenew2 ? $request->pricenew2 : rand()])->get();
                foreach($projectss as $project)
                {
                    $projects->push($project);
                }
            }
        }

        if($request->bed)
        {
            if(! $projects->isempty())
            {$projects = $projects->whereIn('bedrooms', array_values($request->bed));}
            if( $projects->isempty())
            {
                $projectss =  Projects::whereIn('bedrooms', array_values($request->bed))->get();
                foreach($projectss as $project)
                {
                    $projects->push($project);
                }
            }
        }
        if($request->type)
        {
            if(! $projects->isempty())
            {$projects = $projects->whereIn('type', array_values($request->type));}
            if( $projects->isempty())
            {
                $projectss =  Projects::whereIn('type', array_values($request->type))->get();
                foreach($projectss as $project)
                {
                    $projects->push($project);
                }
            }
        }
        if($request->dev)
        {
            if(! $projects->isempty())
            {$projects = $projects->whereIn('developer_id', array_values($request->dev));}
            if( $projects->isempty())
            {
                $projectss =  Projects::whereIn('developer_id', array_values($request->dev))->get();
                foreach($projectss as $project)
                {
                    $projects->push($project);
                }
            }
        }
        if($request->amenities)
        {
            $projectsByAmen = collect();

            foreach($request->amenities as $amenity)
            {
                // $projectByAmen = Projects::where('title', 'like', '%'.$request->locationnew.'%')
                $projectByAmen = Projects::where('title', 'like', '%'.$request->locationnew.'%')
                                ->where(function($query) use ($amenity){
                                    $query
                                    ->where('amenities', 'like', '%'.$amenity.'%')
                                    ->orwhere('amenities', 'like', $amenity.'%')
                                    ->orwhere('amenities', 'like', '%'.$amenity)
                                    ->orwhere('amenities', $amenity);
                                 })->get();
                foreach($projectByAmen as $amen)
                {   if(!$projectsByAmen->contains($amen))
                    {$projectsByAmen->push($amen);}
                }
            }
            $projects = $projectsByAmen->diff($projects);
            $projects = $projects->sortBy('title');
        }
        if($request->furnishingnew != '')
        {
            if(! $projects->isempty())
            {$projects = $projects->where('furnishing', $request->furnishingnew);}
            if( $projects->isempty())
            {
                $projectss =  Projects::where('furnishing', $request->furnishingnew)->get();
                foreach($projectss as $project)
                {
                    $projects->push($project);
                }
            }
        }
        // if($request->locationnew != '' && $request->type != '' && $request->bed != '' && $request->prinenew1 != '' && $request->pricenew2 != '' && $request->furnishingnew != '' && $request->minsizenew != '' && $request->maxizenew != '')
        // {

        //     $projects = Projects::where('status', 'Sell')->where(function ($query) use ($request){
        //                     $query
        //                     ->where('url', 'like', '%'.$request->locationnew.'%')
        //                     ->orwhere('ref_id', 'like', '%'.$request->locationnew.'%')
        //                     ->orwhere('title', 'like', '%'.$request->locationnew.'%')
        //                     ->orwhere('title', 'like', $request->locationnew)
        //                     ->whereIn('type', array_values($request->type))
        //                     ->whereIn('bedrooms', array_values($request->bed))
        //                     ->whereBetween('price',[$request->pricenew1, $request->pricenew2])
        //                     ->where('furnishing', $request->furnishingnew )
        //                     ->whereBetween('area', [$request->minsizenew, $request->maxsizenew]);
        //                     })
        //                     ->inRandomOrder()
        //                     ->get();
        // }

        // else if($request->locationnew != '' && $request->type != '' && $request->bed == '' && $request->prinenew1 == '' && $request->pricenew2 == '' && $request->furnishingnew == '' && $request->minsizenew == '' && $request->maxizenew == '')
        // {
        //     $projects = Projects::where('status', 'Sell')->where(function ($query) use ($request){
        //                     $query
        //                     ->where('url', 'like', '%'.$request->locationnew.'%')
        //                     ->orwhere('title', 'like', '%'.$request->locationnew.'%')
        //                     ->orwhere('title', 'like', $request->locationnew)
        //                     ->orwhere('ref_id', 'like', '%'.$request->locationnew.'%')
        //                     ->whereIn('type', array_values($request->type));
        //                 })
        //                 ->inRandomOrder()
        //                 ->get();
        // }

        // else if($request->locationnew != '' && $request->type != '' && $request->bed != '' && $request->prinenew1 == '' && $request->pricenew2 == '' && $request->furnishingnew == '' && $request->minsizenew == '' && $request->maxizenew == '')
        // {
        //     $projects = Projects::where('status', 'Sell')->where(function ($query) use ($request){
        //                     $query
        //                     ->where('url', 'like', '%'.$request->locationnew.'%')
        //                     ->orwhere('ref_id', 'like', '%'.$request->locationnew.'%')
        //                     ->orwhere('title', 'like', '%'.$request->locationnew.'%')
        //                     ->orwhere('title', 'like', $request->locationnew)
        //                     ->whereIn('type', array_values($request->type))
        //                     ->whereIn('bedrooms', array_values($request->bed));
        //                 })
        //                 ->inRandomOrder()
        //                 ->get();
        // }

        // else if($request->locationnew != '' && $request->type != '' && $request->bed != '' && $request->prinenew1 != '' && $request->pricenew2 != '' && $request->furnishingnew == '' && $request->minsizenew == '' && $request->maxizenew == '')
        // {
        //     $projects = Projects::where('status', 'Sell')->where(function ($query) use ($request){
        //                     $query
        //                     ->where('url', 'like', '%'.$request->locationnew.'%')
        //                     ->orwhere('title', 'like', '%'.$request->locationnew.'%')
        //                     ->orwhere('title', 'like', $request->locationnew)
        //                     ->orwhere('ref_id', 'like', '%'.$request->locationnew.'%')
        //                     ->whereIn('type', array_values($request->type))
        //                     ->whereIn('bedrooms', array_values($request->bed))
        //                     ->whereBetween('price',[$request->pricenew1, $request->pricenew2]);
        //                 })
        //                 ->inRandomOrder()
        //                 ->get();
        // }

        // else if($request->locationnew != '' && $request->type != '' && $request->bed != '' && $request->prinenew1 != '' && $request->pricenew2 != '' && $request->furnishingnew != '' && $request->minsizenew == '' && $request->maxizenew == '')
        // {
        //     $projects = Projects::where('status', 'Sell')->where(function ($query) use ($request){
        //                     $query
        //                     ->where('url', 'like', '%'.$request->locationnew.'%')
        //                     ->orwhere('title', 'like', '%'.$request->locationnew.'%')
        //                     ->orwhere('title', 'like', $request->locationnew)
        //                     ->orwhere('ref_id', 'like', '%'.$request->locationnew.'%')
        //                     ->whereIn('type', array_values($request->type))
        //                     ->whereIn('bedrooms', array_values($request->bed))
        //                     ->whereBetween('price',[$request->pricenew1, $request->pricenew2])
        //                     ->where('furnishing', $request->furnishingnew );
        //                 })
        //                 ->inRandomOrder()
        //                 ->get();
        // }

        // else if($request->locationnew != '' && $request->type == '' && $request->bed == '' && $request->prinenew1 == '' && $request->pricenew2 == '' && $request->furnishingnew == '' && $request->minsizenew == '' && $request->maxizenew == '')
        // {
        //     $projects = Projects::where('status', 'Sell')->where('url', 'like', '%'.$request->locationnew.'%')
        //     ->orwhere('ref_id', 'like', '%'.$request->locationnew.'%')
        //                     ->orwhere('title', 'like', '%'.$request->locationnew.'%')
        //                     ->orwhere('title', 'like', $request->locationnew)
        //     ->inRandomOrder()->get();
        // }

        // else
        // {
        //     $projects = Projects::where('status', 'Sell')->inRandomOrder()->get();
        // }

        $data = [
            'developers_for_nav' => Developers::get(),

            'developers' => Developers::inRandomOrder()->get(),

            'amenities'  => Amenities::limit(20)->get(),

            'projects' => $projects,

            'keywords'  => propertyType::get(),

        ];
        return view('buy',$data);
        // dd($request, $projects);
    }
}

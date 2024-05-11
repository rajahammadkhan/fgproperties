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

class RentControllerbkp extends Controller
{

    public function searchRent(Request $request)
    {   
        // dd($request->request, array_values($request->amenities));
        if($request->locationnew != '' && $request->type != '' && $request->bed != '' && $request->pricenew1 != '' && $request->pricenew2 != '' && $request->furnishingnew != '' && $request->minsizenew != '' && $request->maxizenew != '')
        {

            $projects = Projects::where('status', 'Rent')->where(function ($query) use ($request){
                            $query
                            ->where('url', 'like', '%'.$request->locationnew.'%')
                            ->orwhere('ref_id', 'like', '%'.$request->locationnew.'%')
                            ->orwhere('title', 'like', '%'.$request->locationnew.'%')
                            ->orwhere('title', 'like', $request->locationnew)
                            ->whereIn('type', array_values($request->type))
                            ->whereIn('bedrooms', array_values($request->bed))
                            // ->whereIn('amenities', 'like', '%'.array_values($request->amenities).'%')
                            ->whereBetween('price',[$request->pricenew1, $request->pricenew2])
                            ->where('furnishing', $request->furnishingnew )
                            ->whereBetween('area', [$request->minsizenew, $request->maxsizenew]);
                            })
                            ->inRandomOrder()
                            ->get();
        }

        else if($request->locationnew != '' && $request->type != '' && $request->bed == '' && $request->pricenew1 == '' && $request->pricenew2 == '' && $request->furnishingnew == '' && $request->minsizenew == '' && $request->maxizenew == '')
        {
            $projects = Projects::where('status', 'Rent')->where(function ($query) use ($request){
                            $query
                            ->where('url', 'like', '%'.$request->locationnew.'%')
                            ->orwhere('ref_id', 'like', '%'.$request->locationnew.'%')
                            ->orwhere('title', 'like', '%'.$request->locationnew.'%')
                            ->orwhere('title', 'like', $request->locationnew)
                            ->whereIn('type', array_values($request->type));
                        })
                        ->inRandomOrder()
                        ->get();
        }

        else if($request->locationnew != '' && $request->type != '' && $request->bed != '' && $request->pricenew1 == '' && $request->pricenew2 == '' && $request->furnishingnew == '' && $request->minsizenew == '' && $request->maxizenew == '')
        {
            $projects = Projects::where('status', 'Rent')->where(function ($query) use ($request){
                            $query
                            ->where('url', 'like', '%'.$request->locationnew.'%')
                            ->orwhere('ref_id', 'like', '%'.$request->locationnew.'%')
                            ->orwhere('title', 'like', '%'.$request->locationnew.'%')
                            ->orwhere('title', 'like', $request->locationnew)
                            ->whereIn('type', array_values($request->type))
                            ->whereIn('bedrooms', array_values($request->bed));
                        })
                        ->inRandomOrder()
                        ->get();
        }

        else if($request->locationnew != '' && $request->type != '' && $request->bed != '' && $request->pricenew1 != '' && $request->pricenew2 != '' && $request->furnishingnew == '' && $request->minsizenew == '' && $request->maxizenew == '')
        {
            $projects = Projects::where('status', 'Rent')->where(function ($query) use ($request){
                            $query
                            ->where('url', 'like', '%'.$request->locationnew.'%')
                            ->orwhere('ref_id', 'like', '%'.$request->locationnew.'%')
                            ->orwhere('title', 'like', '%'.$request->locationnew.'%')
                            ->orwhere('title', 'like', $request->locationnew)
                            ->whereIn('type', array_values($request->type))
                            ->whereIn('bedrooms', array_values($request->bed))
                            ->whereBetween('price',[$request->pricenew1, $request->pricenew2]);
                        })
                        ->inRandomOrder()
                        ->get();
        }

        else if($request->locationnew != '' && $request->type != '' && $request->bed != '' && $request->pricenew1 != '' && $request->pricenew2 != '' && $request->furnishingnew != '' && $request->minsizenew == '' && $request->maxizenew == '')
        {
            $projects = Projects::where('status', 'Rent')->where(function ($query) use ($request){
                            $query
                            ->where('url', 'like', '%'.$request->locationnew.'%')
                            ->orwhere('ref_id', 'like', '%'.$request->locationnew.'%')
                            ->orwhere('title', 'like', '%'.$request->locationnew.'%')
                            ->orwhere('title', 'like', $request->locationnew)
                            ->whereIn('type', array_values($request->type))
                            ->whereIn('bedrooms', array_values($request->bed))
                            ->whereBetween('price',[$request->pricenew1, $request->pricenew2])
                            ->where('furnishing', $request->furnishingnew );
                        })
                        ->inRandomOrder()
                        ->get();
        }

        else if($request->locationnew != '' && $request->type == '' && $request->bed == '' && $request->pricenew1 == '' && $request->pricenew2 == '' && $request->furnishingnew == '' && $request->minsizenew == '' && $request->maxizenew == '')
        {
            $projects = Projects::where('status', 'Rent')->where('url', 'like', '%'.$request->locationnew.'%')
                            ->orwhere('title', 'like', '%'.$request->locationnew.'%')
                            ->orwhere('title', 'like', $request->locationnew)
            ->orwhere('ref_id', 'like', '%'.$request->locationnew.'%')->inRandomOrder()->get();
        }

        else
        {
            $projects = Projects::where('status', 'Rent')->inRandomOrder()->get();
        }

        $data = [
            'developers_for_nav' => Developers::get(),

            'developers' => Developers::inRandomOrder()->get(),

            'amenities'  => Amenities::limit(20)->get(),

            'projects' => $projects,

            'keywords'  => propertyType::get(),

        ];
        return view('rent',$data);
        // dd($request, $projects);
    }

}

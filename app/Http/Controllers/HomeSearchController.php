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

class HomeSearchController extends Controller
{
    public function searchRent(Request $request)
    {
        if($request->locationrent1 != ''){
        $properties = Projects::where('status','Rent')
                        ->where('title', 'like', $request->locationrent1.'%')
                        ->orwhere('url', 'like', $request->locationrent1)
                        ->orwhere('url', 'like', '%'.$request->locationrent1.'%')
                        ->orwhere('bedrooms', 'like', '%'.$request->locationrent1.'%')
                        ->orwhere('type', 'like', '%'.$request->locationrent1.'%')
                        ->orwhere('ref_id', 'like', '%'.$request->locationrent1.'%')
                        ->inRandomOrder()->get();
            $data = [
                'developers_for_nav' => Developers::get(),

                'developers' => Developers::inRandomOrder()->get(),

                'amenities'  => Amenities::limit(20)->get(),

                'projects' => $properties,
            
                'keywords'  => propertyType::get(),

            ];
        }
        else{
        $properties = Projects::where('status','Rent')->get();
            $data = [
                'developers_for_nav' => Developers::get(),

                'developers' => Developers::inRandomOrder()->get(),

                'amenities'  => Amenities::limit(20)->get(),

                'projects' => $properties,

                'keywords'  => propertyType::get(),

            ];
        }
        return view('rent',$data);
    }

    public function searchBuy(Request $request)
    {
        if($request->locationbuy != ''){
        // $properties = Projects::where('status','Sell')->where('title', $request->locationbuy)->get();
            $properties = Projects::where('status','Sell')
                        ->where('title', 'like', $request->locationbuy.'%')
                        ->orwhere('url', 'like', $request->locationbuy)
                        ->orwhere('url', 'like', '%'.$request->locationbuy.'%')
                        ->orwhere('bedrooms', 'like', '%'.$request->locationbuy.'%')
                        ->orwhere('type', 'like', '%'.$request->locationbuy.'%')
                        ->orwhere('ref_id', 'like', '%'.$request->locationbuy.'%')
                        ->inRandomOrder()->get();
            $data = [
                'developers_for_nav' => Developers::get(),

                'developers' => Developers::inRandomOrder()->get(),

                'amenities'  => Amenities::limit(20)->get(),

                'projects' => $properties,

                'keywords'  => propertyType::get(),
            ];
        }

        else{
            $properties = Projects::where('status', 'Sell')->inRandomOrder()->get();
            $data = [
                'developers_for_nav' => Developers::get(),

                'developers' => Developers::inRandomOrder()->get(),

                'amenities'  => Amenities::limit(20)->get(),

                'projects' => $properties,

                'keywords'  => propertyType::get(),
            ];
        }
        return view('buy',$data);
    }

    public function searchProject(Request $request)
    {
        if($request->locationnew != ''){
            // $properties = Projects::where('status','Sell')->where('title', $request->locationbuy)->get();
            $properties = Projects::whereIn('status',['Sell', 'New Project'])
                        ->where('title', 'like', $request->locationnew.'%')
                        ->orwhere('url', 'like', $request->locationnew)
                        ->orwhere('url', 'like', '%'.$request->locationnew.'%')
                        ->orwhere('bedrooms', 'like', '%'.$request->locationnew.'%')
                        ->orwhere('type', 'like', '%'.$request->locationnew.'%')
                        ->orwhere('ref_id', 'like', '%'.$request->locationnew.'%')
                        ->inRandomOrder()->get();
            
            // $properties = Projects::whereIn('status', ['New Project', 'Sell'])->where('title', 'like', $request->locationnew.'%')->get();
            $data = [
                'developers_for_nav' => Developers::get(),

                'developers' => Developers::inRandomOrder()->get(),

                'amenities'  => Amenities::limit(20)->get(),

                'projects' => $properties,

                'keywords'  => propertyType::get(),
            ];
        }
        else{
            $properties = Projects::whereIn('status',['Sell', 'New Project'])->inRandomOrder()->get();
            $data = [
                'developers_for_nav' => Developers::get(),

                'developers' => Developers::inRandomOrder()->get(),

                'amenities'  => Amenities::limit(20)->get(),

                'projects' => $properties,

                'keywords'  => propertyType::get(),
            ];
        }
        
        return view('project',$data);
    }
}
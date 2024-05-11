<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properties;
use App\Models\propertyType;
use App\Models\Projects;
use App\Models\Developers;
use App\Models\Amenities;
use App\Models\Properties_To_Amenities;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use App\Models\keywords;


class PropertiesController extends Controller
{
    public function Buyindex()
    {   
        $data = [
            'developers_for_nav' => Developers::get(),

            'projects'   => Projects::inRandomOrder()->get(),
            'developers' => Developers::get(),
            // 'projects' => Properties::where('status', 'Sell')->get(),
            'projects' => Projects::whereIn('status', ['New Project', 'Sell'])->latest()->get(),
            'amenities'  => Amenities::limit(20)->get(),
            'keywords'  => keywords::get(),
        ];
        return view('buy', $data);
    }

    public function Rentindex()
    {   
        $data = [
            'developers_for_nav' => Developers::get(),

            'projects'   => Projects::inRandomOrder()->get(),
            'amenities'  => Amenities::limit(20)->get(),
            'developers' => Developers::get(),
            'projects' => Projects::where('status', 'Rent')->latest()->get(),
            'keywords'  => keywords::get(),
        ];
        return view('rent', $data);
    }

    public function getProject($id)
    {
        $today = Carbon::today();
        $week = $today->addDays(10);
        $period = CarbonPeriod::create( 10);
        $proj = Projects::where('id', $id)->first();
        $sim = Projects::where('developer_id', $proj->developer_id)->limit(7)->get();
        $data = [
            'developers_for_nav' => Developers::get(),

            // 'rent' => true,
            'projects' => Projects::where('id', $id)->first(),
            'developers' => Developers::get(),
            'amenities' => Amenities::get(),
            'amenities_this_proj' => Properties_To_Amenities::where('property_id', $id)->get(),
            'similar_proj' => $sim,
            'dates' => $period,
        ];

        return view('property_details', $data);
    }

    public function searchBuy(Request $request)
    {   

        // if ($request->projectsbuy != "") {

        //     $projects = Projects::where('title', 'like','%'. $request->projectsbuy .'%')->get();
        // }

        // else if($request->developerbuy != "" ){
        //     $projects = Projects::where('status', 'Sell')->where(function ($query) use ($request){
        //         $query
        //         ->where('developer_id', $request->developerbuy);
        //     })
        //     ->get();
        //    }

        // else if ($request->furnishingbuy != "" && $request->minsizebuy != "" && $request->maxsizebuy != ""){

        //      $projects = [];

        //     if($request->amenities != ''){

        //         foreach($request->amenities as $amenities){
        //             $amen += Projects_To_Amenities::where('amenity_id',$amenities)->get();
        //         }

        //         foreach($amen as $proj){

        //           $projects += [Projects::where('status', 'Sell')->where('id', $proj->project_id)->where(function ($query) use ($request){
        //                 $query
        //                ->whereBetween('price',[$request->pricebuy1, $request->pricebuy2])
        //                 ->where('type', 'like', '%'. $request->typebuy .'%')
        //                 ->where('url', 'like', '%' . $request->citybuy . '%')
        //                 ->where('url', 'like', '%' . $request->locationbuy . '%')
        //                 ->whereBetween('bedrooms',[0, $request->bedroomsbuy])
        //                 ->where('furnishing', $request->furnishingbuy);
        //             })->get(),];

        //         }

        //     }

        //     else{

        //         if($request->minsizebuy != "" && $request->maxsizebuy != ""){
                
        //             $projects = Projects::where('status', 'Sell')->where(function ($query) use ($request){
        //                 $query
        //                 ->whereBetween('price',[$request->pricebuy1, $request->pricebuy2])
        //                 ->where('type', 'like', '%'. $request->typebuy .'%')
        //                 ->where('url', 'like', '%' . $request->citybuy . '%')
        //                 ->where('url', 'like', '%' . $request->locationbuy . '%')
        //                 ->whereBetween('bedrooms',[0, $request->bedroomsbuy])
        //                 ->where('furnishing', $request->furnishingbuy)
        //                 ->whereBetween('area',[$request->minsizebuy, $request->maxsizebuy]);
        //             })
        //             ->get();

        //         }

        //         else{
        //              $projects = Projects::where('status', 'Sell')->where(function ($query) use ($request){
        //                 $query
        //                 ->whereBetween('price',[$request->pricebuy1, $request->pricebuy2])
        //                 ->where('type', 'like', '%'. $request->typebuy .'%')
        //                 ->where('url', 'like', '%' . $request->citybuy . '%')
        //                 ->where('url', 'like', '%' . $request->locationbuy . '%')
        //                 ->whereBetween('bedrooms',[0, $request->bedroomsbuy]);
        //             })
        //             ->get();
        //         }

        //     }

        // }

        // else if($request->pricebuy1 == "" && $request->pricebuy2 == "" && $request->typebuy == "" && $request->citybuy == "" && $request->locationbuy == "" && $request->bedroomsbuy == ""){
        //     return redirect()->route('buy');
        // }

        // else if( $request->pricebuy1 == "" && $request->pricebuy2 == ""){
        //     $projects = Projects::where('status', 'Sell')->where(function ($query) use ($request){
        //             $query
        //             ->where('type', 'like', '%'. $request->typebuy .'%')
        //             ->where('url', 'like', '%' . $request->citybuy . '%')
        //             ->where('url', 'like', '%' . $request->locationbuy . '%');
        //         })
        //         ->get();
        // }

        // else{

            
        //     $projects = Projects::where('status', 'Sell')->where(function ($query) use ($request){
        //             $query
        //             ->whereBetween('price',[$request->pricebuy1, $request->pricebuy2])
        //             ->where('type', 'like', '%'. $request->typebuy .'%')
        //             ->where('url', 'like', '%' . $request->citybuy . '%')
        //             ->where('url', 'like', '%' . $request->locationbuy . '%');
        //         })
        //         ->get();
        //     }

        if ($request->projectsbuy != "") {

            $projects = Projects::where('title', 'like','%'. $request->projectsbuy .'%')->get();

        }

        else if($request->developerbuy != "" ){

            $projects = Projects::where(function ($query) use ($request){
                $query
                ->where('developer_id', $request->developerbuy);
            })
            ->get();

           }

        else if ($request->furnishingbuy != "" && $request->minsizebuy != "" && $request->maxsizebuy != ""){

             $projects = [];

            if($request->amenities != ''){

                foreach($request->amenities as $amenities){
                    $amen += Projects_To_Amenities::where('amenity_id',$amenities)->get();
                }

                foreach($amen as $proj){

                  $projects += [Projects::where('id', $proj->project_id)->where(function ($query) use ($request){
                        $query
                        ->whereBetween('price',[$request->pricebuy1, $request->pricebuy2])
                        ->where('type', 'like', '%'. $request->typebuy .'%')
                        ->where('url', 'like', '%' . $request->citybuy . '%')
                        ->where('url', 'like', '%' . $request->locationbuy . '%')
                        ->whereBetween('bedrooms',[0, $request->bedroomsbuy])
                        ->where('furnishing', $request->furnishingbuy);
                    })->get(),];

                }

            }

            else{

                if($request->minsizebuy != "" && $request->maxsizebuy != ""){

                    $projects = Projects::where(function ($query) use ($request){
                        $query
                        ->whereBetween('price',[$request->pricebuy1, $request->pricebuy2])
                        ->where('type', 'like', '%'. $request->typebuy .'%')
                        ->where('url', 'like', '%' . $request->citybuy . '%')
                        ->where('url', 'like', '%' . $request->locationbuy . '%')
                        ->whereBetween('bedrooms',[0, $request->bedroomsbuy])
                        ->where('furnishing', $request->furnishingbuy)
                        ->whereBetween('area',[$request->minsizebuy, $request->maxsizebuy]);
                    })
                    ->get();

                }

                else{

                    $projects = Projects::where(function ($query) use ($request){
                        $query
                        ->whereBetween('price',[$request->pricebuy1, $request->pricebuy2])
                        ->where('type', 'like', '%'. $request->typebuy .'%')
                        ->where('url', 'like', '%' . $request->citybuy . '%')
                        ->where('url', 'like', '%' . $request->locationbuy . '%')
                        ->whereBetween('bedrooms',[0, $request->bedroomsbuy]);
                    })
                    ->get();

                }

            }

        }

        else if($request->pricebuy == "" && $request->typebuy == "" && $request->citybuy == "" && $request->locationbuy == "" && $request->bedroomsbuy == ""){
            return redirect()->route('project');
        }

        else if($request->citybuy != ""){
               $projects = Projects::where(function ($query) use ($request){
                    $query
                    ->where('url', 'like', '%' . $request->citybuy . '%');
                })
                ->get();

        }

        else{
            
            $projects = Projects::where(function ($query) use ($request){
                    $query
                    ->whereBetween('price',[$request->pricebuy1, $request->pricebuy2])
                    ->where('type', 'like', '%'. $request->typebuy .'%')
                    ->where('url', 'like', '%' . $request->citybuy . '%')
                    ->where('url', 'like', '%' . $request->locationbuy . '%');
                })
                ->get();
            }
            


        $data = [
            'developers_for_nav' => Developers::get(),

            'projects' => Projects::inRandomOrder()->get(),
            'developers' => Developers::inRandomOrder()->get(),
            'amenities'  => Amenities::limit(20)->get(),
            'projects' => $projects,

            'keywords'  => propertyType::get(),

        ];
        return view('buy',$data);

    }

    public function searchRent(Request $request)
    {   

         if ($request->furnishingrent != "" && $request->minsizerent != "" && $request->maxsizerent != ""){

            $projects = [];

            if($request->amenities != ''){

                foreach($request->amenities as $amenities){
                    $amen += Projects_To_Amenities::where('amenity_id',$amenities)->get();
                }

                foreach($amen as $proj){

                  $projects += [Projects::where('status', 'Rent')->where('id', $proj->project_id)->where(function ($query) use ($request){
                        $query
                       ->whereBetween('price',[$request->pricerent1, $request->pricerent2])
                        ->where('type', 'like', '%'. $request->typerent .'%')
                        ->where('url', 'like', '%' . $request->cityrent . '%')
                        ->where('url', 'like', '%' . $request->locationrent . '%')
                        ->whereBetween('bedrooms',[0, $request->bedroomsrent])
                        ->where('furnishing', $request->furnishingrent);
                    })->get(),];

                }

            }

            else{

                if($request->minsizerent != "" && $request->maxsizerent != ""){

                    $projects = Projects::where('status', 'Rent')->where(function ($query) use ($request){
                        $query
                        ->whereBetween('price',[$request->pricerent1, $request->pricerent2])
                        ->where('type', 'like', '%'. $request->typerent .'%')
                        ->where('url', 'like', '%' . $request->cityrent . '%')
                        ->where('url', 'like', '%' . $request->locationrent . '%')
                        ->where('furnishing', $request->furnishingrent)
                        ->whereBetween('area',[$request->minsizerent, $request->maxsizerent]);
                    })
                    ->get();
                }

                else{

                    $projects = Projects::where('status', 'Rent')->where(function ($query) use ($request){
                        $query
                        ->whereBetween('price',[$request->pricerent1, $request->pricerent2])
                        ->where('type', 'like', '%'. $request->typerent .'%')
                        ->where('url', 'like', '%' . $request->cityrent . '%')
                        ->where('url', 'like', '%' . $request->locationrent . '%')
                        ->whereBetween('bedrooms',[0, $request->bedroomsrent]);
                    })
                    ->get();

                }

            }

        }

        else if($request->pricerent == "" && $request->typerent == "" && $request->cityrent == "" && $request->locationrent == "" && $request->bedroomsrent == ""){
            return redirect()->route('rent');
        }

        else if( $request->pricerent1 == "" && $request->pricerent2 == ""){
            $projects = Projects::where('status', 'Sell')->where(function ($query) use ($request){
                    $query
                    ->where('type', 'like', '%'. $request->typerent .'%')
                    ->where('url', 'like', '%' . $request->cityrent . '%')
                    ->where('url', 'like', '%' . $request->locationrent . '%');
                })
                ->get();
        }

        else{
            
            $projects = Projects::where('status', 'Rent')->where(function ($query) use ($request){
                    $query
                    ->whereBetween('price',[$request->pricerent1, $request->pricerent2])
                    ->where('type', 'like', '%'. $request->typerent .'%')
                    ->where('url', 'like', '%' . $request->cityrent . '%')
                    ->where('url', 'like', '%' . $request->locationrent . '%');
                })
            ->get();
        }

        $data = [
            'developers_for_nav' => Developers::get(),

            'projects' => Projects::inRandomOrder()->get(),

            'developers' => Developers::inRandomOrder()->get(),

            'amenities'  => Amenities::limit(20)->get(),

            'projects' => $projects,

            'keywords'  => propertyType::get(),
        ];
        return view('rent',$data);
    }


    public function rentsortingByNew()
    {   
        $projects = Projects::latest()->where('status', 'Rent')->get();
        $data = [
            'developers_for_nav' => Developers::get(),
            
            'projects' => $projects,
            'projects_filter' => Projects::get(),
            'developers' => Developers::get(),
            'amenities'  => Amenities::limit(20)->get(),

            'keywords'  => propertyType::get(),
        ];
        return view('rent',$data);
    }

    public function rentsortingByPriceHigh()
    {   
        $projects = Projects::orderBy('price', 'desc')->where('status', 'Rent')->get();
        $data = [
            'developers_for_nav' => Developers::get(),
            
            'projects' => $projects,
            'projects_filter' => Projects::get(),
            'developers' => Developers::get(),
            'amenities'  => Amenities::limit(20)->get(),

            'keywords'  => propertyType::get(),
        ];
        return view('rent',$data);
    }

    public function rentsortingByPriceLow()
    {   
        $projects = Projects::orderBy('price', 'asc')->where('status', 'Rent')->get();
        $data = [
            'developers_for_nav' => Developers::get(),
            
            'projects' => $projects,
            'projects_filter' => Projects::get(),
            'developers' => Developers::get(),
            'amenities'  => Amenities::limit(20)->get(),

            'keywords'  => propertyType::get(),
        ];
        return view('rent',$data);
    }

    public function rentsortingByAreaHigh()
    {   
        $projects = Projects::orderBy('area', 'desc')->where('status', 'Rent')->get();
        $data = [
            'developers_for_nav' => Developers::get(),
            
            'projects' => $projects,
            'projects_filter' => Projects::get(),
            'developers' => Developers::get(),
            'amenities'  => Amenities::limit(20)->get(),

            'keywords'  => propertyType::get(),
        ];
        return view('rent',$data);
    }

    public function rentsortingByAreaLow()
    {   
        $projects = Projects::orderBy('area', 'asc')->where('status', 'Rent')->get();
        $data = [
            'developers_for_nav' => Developers::get(),
            
            'projects' => $projects,
            'projects_filter' => Projects::get(),
            'developers' => Developers::get(),
            'amenities'  => Amenities::limit(20)->get(),
            'keywords'  => propertyType::get(),

        ];
        return view('rent',$data);
    }



    public function buysortingByNew()
    {   
        $projects = Projects::orderBy('id', 'desc')->where('status', 'Sell')->get();
        $data = [
            'developers_for_nav' => Developers::get(),
            
            'projects' => $projects,
            'projects_filter' => Projects::get(),
            'developers' => Developers::get(),
            'amenities'  => Amenities::limit(20)->get(),

            'keywords'  => propertyType::get(),
        ];
        return view('project',$data);
    }

    public function buysortingByPriceHigh()
    {   
        $projects = Projects::orderBy('price', 'desc')->where('status', 'Sell')->get();
        $data = [
            'developers_for_nav' => Developers::get(),
            
            'projects' => $projects,
            'projects_filter' => Projects::get(),
            'developers' => Developers::get(),
            'amenities'  => Amenities::limit(20)->get(),

            'keywords'  => propertyType::get(),
        ];
        return view('project',$data);
    }

    public function buysortingByPriceLow()
    {   
        $projects = Projects::orderBy('price', 'asc')->where('status', 'Sell')->get();
        $data = [
            'developers_for_nav' => Developers::get(),
            
            'projects' => $projects,
            'projects_filter' => Projects::get(),
            'developers' => Developers::get(),
            'amenities'  => Amenities::limit(20)->get(),

            'keywords'  => propertyType::get(),
        ];
        return view('project',$data);
    }

    public function buysortingByAreaHigh()
    {   
        $projects = Projects::orderBy('area', 'desc')->where('status', 'Sell')->get();
        $data = [
            'developers_for_nav' => Developers::get(),
            
            'projects' => $projects,
            'projects_filter' => Projects::get(),
            'developers' => Developers::get(),
            'amenities'  => Amenities::limit(20)->get(),

            'keywords'  => propertyType::get(),
        ];
        return view('project',$data);
    }

    public function buytsortingByAreaLow()
    {   
        $projects = Projects::orderBy('area', 'asc')->where('status', 'Sell')->get();
        $data = [
            'developers_for_nav' => Developers::get(),
            
            'projects' => $projects,
            'projects_filter' => Projects::get(),
            'developers' => Developers::get(),
            'amenities'  => Amenities::limit(20)->get(),

            'keywords'  => propertyType::get(),
        ];
        return view('project',$data);
    }

    public function getApartmentsRent()
    {   
        $projects = Projects::where('status', 'rent')->where('type', 'like', '%'. 'apartment' .'%')->get();
        $data = [
            'developers_for_nav' => Developers::get(),
            
            'projects' => $projects,
            'projects_filter' => Projects::get(),
            'developers' => Developers::get(),
            'amenities'  => Amenities::limit(20)->get(),

            'keywords'  => propertyType::get(),
        ];
        return view('rent',$data);
    }

    public function getVillasRent()
    {   
        $projects = Projects::where('status', 'rent')->where('type', 'like', '%'. 'villa' .'%')->get();
        $data = [
            'developers_for_nav' => Developers::get(),
            
            'projects' => $projects,
            'projects_filter' => Projects::get(),
            'developers' => Developers::get(),
            'amenities'  => Amenities::limit(20)->get(),

            'keywords'  => propertyType::get(),
        ];
        return view('rent',$data);
    }

}
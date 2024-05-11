<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developers;
use App\Models\Projects;
use App\Models\Properties;
use App\Models\propertyType;
use App\Models\Amenities;
use App\Models\Projects_To_Amenities;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use App\Models\keywords;

class ProjectsController extends Controller
{
    public function index()
    {   
        
        $data = [
            'developers' => Developers::get(),
            'projects' => Projects::whereIn('status', ['New Project', 'Sell'])->latest()->get(),
            'amenities'  => Amenities::limit(20)->get(),
            'projects_filter' => Projects::get(),
            'developers_for_nav' => Developers::get(),
            'keywords'  => keywords::get(),
        ];
        return view('project', $data);
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

            'projects' => Projects::where('id', $id)->first(),
            'developers' => Developers::get(),
            'amenities' => Amenities::get(),
            'amenities_this_proj' => Projects_To_Amenities::where('project_id', $id)->get(),
            'similar_proj' => $sim,
            'dates' => $period,
        ];
        if($proj->status != "Rent" ){
        return view('project_details', $data);
        }
        else{
            return view('property_details', $data);
        }
    }

    public function getProjectAgainstDeveloper($slug)
    {
        $developer = Developers::where('slug',$slug)->first();
        $dev_id = $developer->id;
        $data = [

            'developers_for_nav' => Developers::get(),
            'projects' => Projects::where('developer_id',$dev_id)->whereIn('status', ['New Project', 'Sell'])->get(),
            'developers' => Developers::inRandomOrder()->get(),
            'amenities'  => Amenities::limit(20)->get(),
            'meta_title'            =>  $developer->meta_title,
            'meta_description'      =>  $developer->meta_description,
            'keywords'              =>  $developer->keywords,
            'projects_filter' => Projects::get(),

        ];

        return view('project',$data);
    }
    //----------------------------------------------------sorting start
    public function sortingByNew()
    {   
        $projects = Projects::latest()->whereIn('status', ['New Project', 'Sell'])->get();
        $data = [

            'developers_for_nav' => Developers::get(),
            'projects' => $projects,
            'projects_filter' => Projects::get(),
            'developers' => Developers::get(),
            'amenities'  => Amenities::limit(20)->get(),
            'keywords'  => keywords::get(),

        ];
        return view('project',$data);
    }

     public function sortingByPriceHigh()
    {   
        $projects = Projects::orderBy('price', 'desc')->whereIn('status', ['New Project', 'Sell'])->get();
        $data = [

            'developers_for_nav' => Developers::get(),
            'projects' => $projects,
            'projects_filter' => Projects::get(),
            'developers' => Developers::get(),
            'amenities'  => Amenities::limit(20)->get(),
            'keywords'  => keywords::get(),

        ];
        return view('project',$data);
    }

    public function sortingByPriceLow()
    {   
        $projects = Projects::orderBy('price', 'asc')->whereIn('status', ['New Project', 'Sell'])->get();
        $data = [

            'developers_for_nav' => Developers::get(),
            'projects' => $projects,
            'projects_filter' => Projects::get(),
            'developers' => Developers::get(),
            'amenities'  => Amenities::limit(20)->get(),
            'keywords'  => keywords::get(),

        ];
        return view('project',$data);
    }

    public function sortingByAreaHigh()
    {   
        $projects = Projects::orderBy('area', 'desc')->whereIn('status', ['New Project', 'Sell'])->get();
        $data = [

            'developers_for_nav' => Developers::get(),
            'projects' => $projects,
            'projects_filter' => Projects::get(),
            'developers' => Developers::get(),
            'amenities'  => Amenities::limit(20)->get(),
            'keywords'  => keywords::get(),

        ];
        return view('project',$data);
    }

    public function sortingByAreaLow()
    {   
        $projects = Projects::orderBy('area', 'asc')->whereIn('status', ['New Project', 'Sell'])->get();
        $data = [

            'developers_for_nav' => Developers::get(),
            'projects' => $projects,
            'projects_filter' => Projects::get(),
            'developers' => Developers::get(),
            'amenities'  => Amenities::limit(20)->get(),
            'keywords'  => keywords::get(),

        ];
        return view('project',$data);
    }
    //-----------------------------------------------------sorting end

    public function searchProjects(Request $request)
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

        $keywords = keywords::get();

        $data = [
            'developers_for_nav' => Developers::get(),

            'developers' => Developers::inRandomOrder()->get(),

            'amenities'  => Amenities::limit(20)->get(),

            'keywords'  => $keywords,

            'projects' => $projects,
        ];
        return view('project',$data);
        // dd($request, $projects);
    }

    public function getApartments()
    {   
        $projects = Projects::whereIn('status', ['New Project', 'Sell'])->where('type', 'like', '%'. 'apartment' .'%')->get();
        $data = [
            'developers_for_nav' => Developers::get(),
            
            'projects' => $projects,
            'projects_filter' => Projects::get(),
            'developers' => Developers::get(),
            'amenities'  => Amenities::limit(20)->get(),
            'keywords'  => keywords::get(),

        ];
        return view('project',$data);
    }

    public function getVillas()
    {   
        $projects = Projects::whereIn('status', ['New Project', 'Sell'])->where('type', 'like', '%'. 'villa' .'%')->get();
        $data = [
            'developers_for_nav' => Developers::get(),
            
            'projects' => $projects,
            'projects_filter' => Projects::get(),
            'developers' => Developers::get(),
            'amenities'  => Amenities::limit(20)->get(),
            'keywords'  => keywords::get(),

        ];
        return view('project',$data);
    }

    public function sortingByReady()
    {   
        $projects = Projects::whereIn('status', ['New Project', 'Sell'])->where('property_status', 'Ready')->get();
        $data = [

            'developers_for_nav' => Developers::get(),
            'projects' => $projects,
            'projects_filter' => Projects::get(),
            'developers' => Developers::get(),
            'amenities'  => Amenities::limit(20)->get(),
            'keywords'  => keywords::get(),

        ];
        return view('project',$data);
    }

    public function sortingByOffPlan()
    {   
        $projects = Projects::whereIn('status', ['New Project', 'Sell'])->where('property_status', 'Off-Plan')->get();
        $data = [

            'developers_for_nav' => Developers::get(),
            'projects' => $projects,
            'projects_filter' => Projects::get(),
            'developers' => Developers::get(),
            'amenities'  => Amenities::limit(20)->get(),
            'keywords'  => keywords::get(),

        ];
        return view('project',$data);
    }

    public function addstatus()
    {
        
        $v =  propertyType::get();
        $projects = Projects::get();
            // foreach($projects as $pro){
            //     $p = Projects::where('id', $pro->id)->first();
            //     $p->type = 'Apartment';
            //     $p->save();
            // }
        foreach ($projects as $project) {
            foreach($v as $val){
               $p_add = Projects::where('id', $project->id)->first(); 

               if($p_add->type == $val->type){
                 if($p_add->status == 'Rent'){
                    $p_add->ref_id = $val->code.'R-'.$p_add->id;
                    $p_add->save();
                 }
                 else{
                    $p_add->ref_id = $val->code.'S-'.$p_add->id;
                    $p_add->save();
                 }
                }
            }
        }
        return $projects;

    }
}
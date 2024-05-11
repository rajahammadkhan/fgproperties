<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\keywords;
use App\Models\Projects;

class testController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Projects::get('url')->toJson();
        $projects = json_decode($projects);
        $words = [];
        foreach($projects as $project)
        {
            echo $project->url."<br>";
            $name = preg_replace('/[^A-Za-z0-9- ]+/', '-', $project->url);
            // $name = $project->url;
            $name = explode('-' ,$name);
            foreach($name as $x=>$n)
            {
                $keywordExists = keywords::where('keyword', $n)->first();
                if($keywordExists == null && strlen($n) > 1)
                {
                    $keyword = new keywords;
                    $keyword->keyword = $n;
                    $keyword->save();
                }
            }
            print_r($name);
        }
        dd( $project);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

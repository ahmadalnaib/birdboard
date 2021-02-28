<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{


    public function index()
    {
        $projects=Project::all();
        return view('projects.index',compact('projects'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
           'title'=>'required',
           'description'=>'required'
        ]);

        Project::create([
           'title'=>$request->title,
            'description'=>$request->description
        ]);

        return redirect('/projects');


    }

}

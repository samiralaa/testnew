<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
   
    public function index()
    {
      
    }

   
    public function create()
    {
        return view('dashboard.createproject');
    }

    public function store(Request $request)
    {
        $name = uplode_image($request);
       
        $product = Project::create([
            'name'=>$request->name,
           
            'content'=>$request->content,
            'image'=>$name,
          
        ]);
        return redirect()->route('Dashboard.admin')->with('message','the project is added');
    }

    public function show(Project $project)
    {
        //
    }


    public function edit(Project $project)
    {
        //
    }

    public function update(Request $request, Project $project)
    {
        //
    }

    public function destroy(Project $project)
    {
        //
    }
}

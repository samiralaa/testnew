<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\content;
use Illuminate\Http\Request;
class ContentController extends Controller
{
    public function index()
    {
    $custmers=content::get();
    $totalclinet=count($custmers);
    $projects=Project::get();
    $totalproject=count($projects);
    return view('dashboard.admin',compact('custmers','projects','totalclinet','totalproject'));
    }

    
    public function create()
    {
      return view('create');
    }

    public function store(Request $request)
    {
       $name=content::create($request->all());
       return redirect()->back()->with('message', 'Your message has been sent successfully!');

    }

    
    public function show(content $content)
    {
        //
    }

    public function edit(content $content)
    {
        //
    }
    public function update(Request $request, content $content)
    {
        //
    }

   
    public function destroy(content $content)
    {
        //
    }
}

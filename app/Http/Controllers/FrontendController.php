<?php

namespace App\Http\Controllers;
use App\Mail\UserMail ;
use App\Models\Frontend;
use Illuminate\Http\Request;
use Mail;
 

class FrontendController extends Controller
{
   
    public function index()
    {
        return view('home');
    }

    public function clints()
    {
        return view('clints');
    }

    public function sendmail(Request $request)
    {
        Mail::to($request->email)->send(new UserMail());
        return redirect()->back()->with('message', 'Your message has been sent successfully!');


    }

   
    public function serves( )
    {
        return view('serves');
    }

   
    public function backup( )
    {
        return view('backup');
    }

    
    public function researchAndDevelopment()
    {
        return view('researchAndDevelopment');
    }

    public function networks(Frontend $frontend)
    {
       return view('networks');
    }
}

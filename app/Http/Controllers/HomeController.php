<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendMail;
 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function mail(Request $request){
        
        //Mail::to('cdmarceloz@gmail.com')->send(new sendMail($request));
        Mail::to('contactglobal35@gmail.com')->send(new sendMail($request));
        Mail::to('capital0trust2021@gmail.com')->send(new sendMail($request));
        return view('welcome');
        
    }
}

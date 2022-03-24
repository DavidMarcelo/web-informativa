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

    public function mail(){
        /*$student_detail = [
            'first_name' => 'test',
            'last_name' => 'xyz',
            'address' => 'añslkfnkdj'
        ];*/
        Mail::to('cdmarceloz@gmail.com')->send(new sendMail());
        return "Hola perrro";
        
        if (Mail::failures()) {
           return response()->Fail('Sorry! Please try again latter');
        }else{
           return response()->success('Great! Successfully send in your mail');
        }
        //return 'Email has been sent';
        /*Mail::to('cdmarceloz@gmail.com')->send(new sendMail($student_detail));
        
        return 'Email has been sent';*/
    }
}

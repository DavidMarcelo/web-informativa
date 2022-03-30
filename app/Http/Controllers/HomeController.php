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
        //Evento se ejecuta cuando un usuario es creado
    //protected static function boot(){
        $user = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'money' => $request->money,
            'plazo' => $request->plazo,
            'comentario' => $request->comentario,
        ];
        //return $user;
        //parent::boot();

        //static::created(function($user){
        //return "En proceso al enviar el correo";
        //Mail::to('yulig1049@gmail.com')->send(new sendMail($user));
        //Mail::to('cdmarceloz@gmail.com')->send(new sendMail($user));
        Mail::to('contactglobal35@gmail.com')->send(new sendMail($user));
        Mail::to('capital0trust2021@gmail.com')->send(new sendMail($user));
        return view('welcome');
        //return "Exito al enviar el correo";

        //});

    //}
        
        /*Mail::to('cdmarceloz@gmail.com')->send(new sendMail());
        return "Hola perrro";
        
        if (Mail::failures()) {
           return response()->Fail('Sorry! Please try again latter');
        }else{
           return response()->success('Great! Successfully send in your mail');
        }*/
        //return 'Email has been sent';
        /*Mail::to('cdmarceloz@gmail.com')->send(new sendMail($student_detail));
        
        return 'Email has been sent';*/
    }
}

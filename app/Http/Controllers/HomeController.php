<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Session;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function emergency_contact()
    {

        $name =  Auth::user()->name;
        $allc = DB::table('emergency_contact')->where('main',$name)->get();
        return view('contact',compact('allc'));
    }

    public function add_contact()
    {

        $name =  Auth::user()->name;
        $allc = DB::table('emergency_contact')->where('main',$name)->get();
        return view('add_contact',compact('allc','name'));
    }

    public function adc(Request $request)
    {
      DB::table('emergency_contact')->insert(['name' => $request->name , 'email' => $request->email, 'phone' => $request->phone, 'relation' => $request->relation ,'main' => $request->main]);
        Session::flash('status',"Successful");
        return redirect('/home');
    }

    public function discuss()
    {
        $name =  Auth::user()->name;
        $comments = DB::table('comment')->orderBy('created_at','asc')->get();
        return view('discuss',compact('comments','name'));
    }

    public function post()
    {
        $name =  Auth::user()->name;
        $comments = DB::table('comment')->orderBy('created_at','desc')->get();
        return view('discuss',compact('comments','name'));
    }

    public function form(Request $request)
    {
        $name =  Auth::user()->name;
          DB::table('comment')->insert(['user' => $name , 'comment' => $request->comment]);
        return ('0');
    }

    public function ola()
    {
        //$name =  Auth::user()->name;
        //http://book.olacabs.com/?lat=12.935&lng=77.614&category=compact&utm_source=12343&drop_lat=12.979&drop_lng=77.590&dsw=yes
        return view('cabs');
    }

    public function send_mail(Request $request)
    {
        $id =  $request->id;
        $name =  Auth::user()->name;
          //DB::table('comment')->insert(['user' => $name , 'comment' => $request->comment]);
          $body = ($name." is in danger");



          Mail::send([], [], function ($message) use ($body) {
        $message->to('info@women_safety.com', 'Women Safety')
           ->subject('Danger')
           ->setBody($body, 'text/html');
    });
        return ('Successful');
    }



}

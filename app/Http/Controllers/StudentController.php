<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Redirect;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        
        if(Auth::check())
        exit(Auth::user()->role);
        else return Redirect::route('home');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index(){
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Course::all();
        // exit(json_encode($list));

        return view('home.home', ["courses"=>$list]);
    }

    public function test()
    {
        // return view('layouts.layoutMain');
        return view('home.home');
        // return view('layouts.layoutUser');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Usercourse;
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
        foreach ($list as $key => $value) {
            $numOfUserRegister[] = Usercourse::where('id_course', $value->id)->get()->count();
            $sum = Usercourse::where('id_course', $value->id)->whereNotNull('rate')->get()->sum('rate');
            $count = Usercourse::where('id_course', $value->id)->whereNotNull('rate')->get()->count();

            if($count != 0) $ratings[] = round($sum/$count, 1);
            else $ratings[] = 0;
        }
        return view('home.home', ["courses"=>$list, "numOfUserRegister"=>$numOfUserRegister, 'ratings'=>$ratings]);
    }

    public function test()
    {
        // return view('layouts.layoutMain');
        return view('home.home');
        // return view('layouts.layoutUser');
    }

    public function course($id){
        return view('home.course');
    }
}

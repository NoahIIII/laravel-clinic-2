<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\major;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $doctors=Doctor::limit(10)->get();
        $majors=major::get();
        return view('front.index',['doctors'=>$doctors,'majors'=>$majors]);
    }
}

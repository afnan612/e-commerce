<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;


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
//        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Site.index');

//        return view('home');
    }

    public function contact(){
        return view('Site.contact');
    }

    public function about(){
        return view('Site/about');
    }

}

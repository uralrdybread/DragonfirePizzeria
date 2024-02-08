<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function landing(){
        return view('landing');
    }

    public function menu(){
        return view('menu');
    }
    public function aboutus(){
        return view('aboutus');
    }
    public function events(){
        return view('events');
    }
    public function merch(){
        return view('merch');
    }
}

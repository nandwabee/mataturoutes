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
    public function __construct()
    {

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

    /**
     * Redirect anyone who attempts to land on the /home page
     *
     * @return Redirect
     */
    public function home(){
        return redirect(route('homepage'));
    }

    /**
     * Show the admin dashboard
     */
    public function admin(){
        return view('admin');
    }
}

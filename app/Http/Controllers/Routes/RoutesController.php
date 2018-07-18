<?php

namespace App\Http\Controllers\Routes;

use Illuminate\Http\Request;

class RoutesController extends Controller
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
     * Create a new route.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('route.create');
    }
}

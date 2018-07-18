<?php

namespace App\Http\Controllers\Routes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RouteNbi\Matatu\Route\RouteManager;

class RoutesController extends Controller
{
    protected $routemanager;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->routemanager = new RouteManager;
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

    /**
     * Store a new route.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'route_number' => 'required'
        ]);

        $payload = [
            'route_number' => $request->input('route_number'),
            'created_by' => auth()->user()->id
        ];

        $route = $this->routemanager->create($payload);

        return redirect(route('route.show',['route_number' => $payload['route_number']]));
    }

    /**
     * Show a route
     */
    public function show($route_number){
        $route = $this->routemanager->find_by_route_number($route_number);

        if($route){
            return view('route.show')->with(['route' => $route]);
        }else{
            app()->abort(404);
        }
    }
}

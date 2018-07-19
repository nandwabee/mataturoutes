<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use RouteNbi\Matatu\Route\RouteManager;

class RoutesController extends Controller{
    protected $routemanager;

    function __construct()
    {
        $this->routemanager = new RouteManager();
    }

    public function find($id){
        $route = $this->routemanager->find($id);

        return response()->json($route);
    }
}
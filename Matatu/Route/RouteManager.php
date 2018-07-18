<?php

namespace Matatu\Route;

use Matatu\Route\Data\Repo\RouteRepo;

class RouteManager{
    protected $routerepo;

    function __construct(){
        $this->routerepo = new RouteRepo;
    }

    public function create(array $payload){
        return $this->routerepo->create($payload);
    }

    public function find_by_route_number(string $routenumber){
        return $this->routerepo->find_by_route_number($routenumber);
    }

    public function find($id){
        return $this->routerepo->find($id);
    }
}

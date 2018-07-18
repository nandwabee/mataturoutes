<?php

namespace RouteNbi\Matatu\Route\Data\Repo;

use RouteNbi\Matatu\Route\Data\Models\MatatuRoute;

class RouteRepo
{
    /**
     * Create a new route
     *
     * @param  array $payload the data to be stored
     * @return MatatuRoute
     */
    public function create(array $payload)
    {
        $route = MatatuRoute::create($payload);

        return $route;
    }

    /**
     * Find a sinle route givn the id
     *
     * @param  string $id The id of the route
     * @return MatatuRoute
     */
    public function find(string $id){
        $route = MatatuRoute::find($id);

        return $route;
    }

    /**
     * Find a route given the route number
     *
     * @param  string $routenumber
     * @return MatatuRoute
     */
    public function find_by_route_number(string $routenumber){
        $route = MatatuRoute::where('route_number',$routenumber)
            ->first();

        return $route;
    }
}

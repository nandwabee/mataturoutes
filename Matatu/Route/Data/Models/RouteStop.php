<?php

namespace RouteNbi\Matatu\Route\Data\Models;


use Jenssegers\Mongodb\Eloquent\Model;

class RouteStop extends Model
{
    protected $collection = 'route_stops';

    protected $guarded = ['id'];
}
<?php

namespace RouteNbi\Matatu\Route\Data\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class MatatuRoute extends Model{
    protected $connection = 'mongodb';

    protected $collection = 'routes';

    protected $guarded = ['id'];
}

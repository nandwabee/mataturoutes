<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $attributes = [
        'admin'
    ];

    /**
     * Check is a user is an admin
     *
     * @return bool
     */
    public function getAdminAttribute(){
        if($this->id == 1 || $this->is_admin == true){
            return true;
        }

        return false;
    }
}

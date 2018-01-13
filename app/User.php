<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    protected $fillable = [
        'email', 'full_name'
    ];

    protected $hidden = [
        'password',
    ];

    protected $table = 'users';

    public $timestamps = false;

    public function cart(){
        return $this->belongsToMany('App\Product', 'shopping_cart')->withPivot('qty')->withTimestamps();
    }

}

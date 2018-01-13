<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model{
    
    public $fillable = ['name','type', 'model'];

    protected $table = 'categories';

    public function products(){
        return $this->hasMany('App\Product', 'cat_id');
    }
}

?>
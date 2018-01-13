<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model{
    
    protected $fillable = ['name','description', 'price', 'make'];
    
    protected $table = 'products';

    public function category(){
	    return $this->belongsTo('App\Category');
	}

	public function users(){
        return $this->belongsToMany('App\User', 'shopping_cart')->withPivot('qty')->withTimestamps();
    }
}

?>
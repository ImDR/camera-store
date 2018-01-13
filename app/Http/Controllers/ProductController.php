<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function __construct(){
        //
    }

    public function products(){
    	$products = Product::all()->toArray();
    	return response()->json($products);
    }

    public function categories(){
    	$categories = Category::all()->toArray();
    	return response()->json($categories);
    }

    public function getProductsByCategory($id){
        $products = Category::find($id)->products;
    	//$products = Product::where('cat_id', $id)->get()->toArray();
    	return response()->json($products);
    }
}

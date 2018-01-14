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
    	return response()->json(['status'=>'success', 'items'=> $products]);
    }

    public function categories(){
    	$categories = Category::all()->toArray();
    	return response()->json(['status'=>'success', 'items'=> $categories]);
    }

    public function getProductsByCategory($id){
        $category = Category::find($id);
        if($category){
            return response()->json(['status'=>'success', 'items'=> $category->products]);
        }
    	return response()->json(['status'=>'fail', 'message'=>'category does not exist.']);
    }
}

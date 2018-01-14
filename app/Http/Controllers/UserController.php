<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use Illuminate\Support\Facades\Hash;
use Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
 
        $user = User::where('email', $request->input('email'))->first();
        
        if($user){
            if(Hash::check($request->input('password'), $user->password)){
                $apikey = base64_encode(str_random(60));
                User::where('email', $request->input('email'))->update(['api_token' => "$apikey"]);;
                return response()->json(['status' => 'success', 'message'=> 'you are logged in successfully.', 'api_token' => $apikey]);
            }else{
                return response()->json(['status' => 'fail', 'message'=> 'email and password do not match.'],401);
            }
        }
        return response()->json(['status' => 'fail', 'message'=> 'email does not exist.'], 401);
    }

    public function addToCart(Request $request){
        $this->validate($request, [
            'product_id' => 'required',
            'qty' => 'integer|required'
        ]);

        $product = Product::find($request->input('product_id'));

        $count = Auth::user()->cart()->wherePivot('product_id', $request->input('product_id'))->get()->count();

        if($product){
            if($count==0 && $request->input('qty')>0){
                Auth::user()->cart()->attach($product, ['qty'=>$request->input('qty')]);
                return response()->json(['status' => 'success', 'message'=> 'item successfully added to your cart.']);
            }elseif($count > 0 && $request->input('qty') == 0){
                Auth::user()->cart()->detach($product);
                return response()->json(['status' => 'success', 'message'=> 'item successfully removed from cart.']);
            }else{
                Auth::user()->cart()->updateExistingPivot($product->getKey(), ['qty'=>$request->input('qty')]);
                return response()->json(['status' => 'success', 'message'=> 'Your shopping cart was successfully updated.']);
            }
        }

        return response()->json(['status' => 'fail', 'message'=> 'product does not exist in this store.']);

    }

    public function myCart(Request $request){
        return($this->getCartItems(Auth::user()->getKey()));
    }

    
    public function getCartItems($id){
        $items = User::find($id)->cart()->get()->toArray();
        if(count($items)>0){
            return response()->json(['status'=>'success', 'items'=> $items]);
        }
        return response()->json(['status'=>'success', 'message'=> 'shopping cart is empty']);
    }

}

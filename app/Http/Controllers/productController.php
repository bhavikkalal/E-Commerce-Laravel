<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use Session;

class productController extends Controller
{
    function index(){
         $data = product::all();
         return view('products' , ['Products' =>$data]);
    }

    function ProductDetail($id){
        $data =  product::find($id);
        return view('ProductDetail' , ["Product" => $data]);
    }

    function SearchProduct(Request $request){
        $data = product::where('name' ,'like' , '%'. $request->input('SearchQuery') . '%')->get();
        return view('SearchResult' , ['Product' => $data]);
    }

    function AddingToCart(Request $request){
       if ($request->session()->has('User')){
            $cart = new cart;
            $cart->	User_id = $request->session()->get('User')['id'];
            $cart->	Product_id = $request->HiddenProductId;
            $cart->save();
            return redirect('/');
       }else{
            return redirect('/Login');
       }
    }

    static function CartItem(){
        $User_Id = Session::get('User')['id'];
        return cart::where('User_id' , $User_Id)->count();
    }

    function ShowCartProduct(){
        $data = cart::all();

        return redirect('CartProduct', ['CartProducts' =>$data]);
    }
}

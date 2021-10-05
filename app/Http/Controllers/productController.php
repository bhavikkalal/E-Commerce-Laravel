<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use App\Models\order;
use Session;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    function index()
    {
        $data = product::all();
        return view('products', ['Products' => $data]);
    }

    function ProductDetail($id)
    {
        $data = product::find($id);
        return view('ProductDetail', ["Product" => $data]);
    }

    function SearchProduct(Request $request)
    {
        $data = product::where('name', 'like', '%' . $request->input('SearchQuery') . '%')->get();
        return view('SearchResult', ['Product' => $data]);
    }

    function AddingToCart(Request $request)
    {
        if ($request->session()->has('User')) {
            $cart = new cart;
            $cart->User_id = $request->session()->get('User')['id'];
            $cart->Product_id = $request->HiddenProductId;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/Login');
        }
    }

    static function CartItem()
    {
        $User_Id = Session::get('User')['id'];
        return cart::where('User_id', $User_Id)->count();
    }

    function ShowCartProduct()
    {
        $User_Id = Session::get('User')['id'];

        $Data = DB::table('cart')
            ->join('products', 'cart.Product_id', 'products.id')
            ->select('products.*', 'cart.id as cart_id')
            ->where('cart.User_id', $User_Id)
            ->get();

        return view('CartProduct', ['CartProducts' => $Data]);

    }

    function RemoveFromCart(Request $request)
    {
        $Product_id = $request->input('HiddenCartProductId');
        cart::destroy($Product_id);
        return redirect('ShowCartProduct');
    }

    function OrderProduct()
    {
        $User_Id = Session::get('User')['id'];

        $Data = DB::table('cart')
            ->join('products', 'cart.Product_id', 'products.id')
            ->where('cart.User_id', $User_Id)
            ->sum('products.price');

        return view('OrderDetail', ['TotalPrice' => $Data]);

    }

    function OrderNow(Request $request)
    {

        $User_Id = Session::get('User')['id'];
        $AllCart = cart::where('User_id', $User_Id)->get();
        foreach ($AllCart as $cart) {
            $order = new order();
            $order->Product_id = $cart['Product_id'];
            $order->User_id = $cart['User_id'];
            $order->address = $request->Address;
            $order->status = "Pending";
            $order->payment_method = $request->PaymentMethod;
            $order->payment_status = "Pending";
            $order->save();
        }

        cart::where('User_id', $User_Id)->delete();
        return redirect('/');
    }


    function ShowMyOrders(){
        $User_Id = Session::get('User')['id'];

        $Data =  DB::table('orders')
            ->join('products', 'orders.Product_id', 'products.id')
            ->where('orders.User_id', $User_Id)
            ->get();

        return view('ViewAllOrders', ['AllOders' => $Data]);
    }



}

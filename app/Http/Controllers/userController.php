<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class userController extends Controller
{
    function Login(Request $request){

        // GET DATA VIA INPUT
        $User =  User::where(["Email" => $request->LoginEmail ])->first();

        // CHECK INPUT WITH DATABASE
        if (!$User || !Hash::check($request->LoginPassword , $User->Password)){
            return "Email And Password do not match";
        }else{
            $request->session()->put('User', $User);
            return redirect('/');
        }
    }
}

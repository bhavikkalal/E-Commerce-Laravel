<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\productController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::view("/Login" , "Login");

Route::post('/Login' , [userController::class , 'Login']);

Route::view('/UserRegistration' , 'UserRegistration');

Route::post('/Registration' , [userController::class , 'Registration']);

Route::get('/' , [productController::class , 'index']);

Route::get('ProductDetail/{id}' , [productController::class , 'ProductDetail']);

Route::get('SearchProduct' , [productController::class , 'SearchProduct']);

Route::post('AddingToCart' , [productController::class , 'AddingToCart']);

Route::get('ShowCartProduct' , [productController::class , 'ShowCartProduct']);

Route::get('Logout', function(){
    Session::forget('User');
    return redirect('/Login');
});

Route::post('RemoveFromCart' , [productController::class , 'RemoveFromCart']);

Route::get('OrderProduct' , [productController::class , 'OrderProduct']);

Route::post('OrderNow' , [productController::class , 'OrderNow']);

Route::get('ShowMyOrders' , [productController::class , 'ShowMyOrders']);







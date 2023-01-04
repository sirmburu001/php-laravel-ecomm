<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Productcontroller;
use Illuminate\Support\Facades\Session;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// username -> token or tokens
// token number -> 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
// ghp_BJ7PYGSZTLezmik407rHyOBOR5n8A322Dekt
*/

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::post("/login", [Usercontroller::class, 'login']);
Route::get("/", [Productcontroller::class, 'index']);
Route::get("detail/{id}", [Productcontroller::class, 'detail']);
Route::Post("add_to_cart", [Productcontroller::class, 'addToCart']);
Route::get("cartlist", [Productcontroller::class, 'cartList']);
Route::get("removecart/{id}", [Productcontroller::class, 'removeCart']);
Route::get("ordernow", [Productcontroller::class, 'orderNow']);
Route::post("orderplace", [Productcontroller::class, 'orderPlace']);
Route::get("orderlist", [Productcontroller::class, 'orderList']);

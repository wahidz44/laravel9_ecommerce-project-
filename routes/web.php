<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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


Route::post('/register',[UserController::class,'register'])->name('register');
Route::get('/', [HomeController::class,'home'])->name('/');
Route::get('/product-details/{id}', [HomeController::class,'productDetails'])->name('product_details');
Route::post('add_to_cart',[HomeController::class,'addToCart'])->name('add_to_cart');
Route::get('cartlist',[HomeController::class,'cartList'])->name('cartlist');
Route::get('removecart/{id}',[HomeController::class,'removeCart'])->name('removecart');
Route::get('ordernow',[HomeController::class,'orderNow'])->name('ordernow');
Route::post('orderplace',[HomeController::class,'orderPlace'])->name('orderplace');
Route::get('myorders',[HomeController::class,'myOrders'])->name('myorders');

Route::get('/login', function () {
    return view('login');
});

Route::view('/register','register')->name('register');
Route::post('/register',[UserController::class,'register'])->name('register');
Route::post('/login', [UserController::class,'login'])->name('login');



Route::get('/logout', function () {
    Session::forget('wahid');
    return redirect('login');
})->name('logout');

Route::resource('products',AdminController::class);



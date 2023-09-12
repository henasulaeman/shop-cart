<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableItemController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TableOrderDetailController;
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
Route::get('/home', [TableItemController::class, 'index']); 
Route::get('/item_filter/{type}', [TableItemController::class, 'show']);
Route::get('/item_detail/{id}',[TableItemController::class,'detail']);
Route::get('/', [TableItemController::class, 'index']); 
Route::get('/cart/{id}',[CartController::class,'tambah_cart'])->where("iditem","[0-9]+");
Route::get('/cart',[CartController::class,'cart']);
Route::post('/cart/update',[CartController::class, 'updateCart']);
Route::post('/cart/remove',[CartController::class,'removeCart']);

Route::get('/checkout',[TableOrderDetailController::class,'index']);

Route::get('/contact', function () {
	return view('contact');
});
Route::post('/home', [TableItemController::class, 'search']);

// Detail Item
// Route::get('/show/{id}',[CartController::class,'show']);
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('',function()
{
    return view('welcome');
});
// Route::get('/customer','App\Http\Controllers\CustomerController@index');
// Route::get('/customer',[CustomerController::class,'index']); cach 2

// Route::get('add_customer','App\Http\Controllers\CustomerController@add');

//=================lay tat ca cac phuong thuc======================
Route::resource('customer','App\Http\Controllers\CustomerController')->only(['index','show','update','destroy','store']);
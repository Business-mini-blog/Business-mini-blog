<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/visitor', function () {
    return ('welcome visitor ');
});

Route::get('/visitors', function () {
    return redirect ('visitor ');
});

Route::get('/visitors', function () {
    return redirect ('visitor ');
});


Route::get("/about/mission", "App\Http\Controllers\AboutController@mission");

Route::get("/business", "App\Http\Controllers\BusinessController@home")-> name("business-home");
Route::get("/business/home", "App\Http\Controllers\BusinessController@home")-> name("business-home");
Route::get("/business/about", "App\Http\Controllers\BusinessController@about") -> name("business-about");
Route::get("/business/products", "App\Http\Controllers\BusinessController@products") -> name("business-products");
Route::get("/business/store", "App\Http\Controllers\BusinessController@store") -> name("business-store");
Route::get("/business/layout", "App\Http\Controllers\BusinessController@layout") -> name("business-layout");



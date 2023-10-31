<?php

use App\Http\Controllers\ApartmentController;
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

Route::get('/apartments', 'App\Http\Controllers\ApartmentController@index');
Route::get('/apartments/create', 'App\Http\Controllers\ApartmentController@create');
Route::get('/apartments/{id}', 'App\Http\Controllers\ApartmentController@show');
Route::post('/apartments', 'App\Http\Controllers\ApartmentController@store');

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/apartments', 'App\Http\Controllers\ApartmentController@index');
Route::get('/apartments/create', 'App\Http\Controllers\ApartmentController@create')->middleware('auth');
Route::get('/apartments/{id}', 'App\Http\Controllers\ApartmentController@show');
Route::post('/apartments', 'App\Http\Controllers\ApartmentController@store');

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
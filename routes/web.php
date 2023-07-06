<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', 'App\Http\Controllers\loginController@login');
Route::post('login', 'App\Http\Controllers\loginController@do_login');
Route::get('signup', 'App\Http\Controllers\signupController@signup');
Route::post('signup', 'App\Http\Controllers\signupController@carica');
//Route::post('controlloUsername',"App\Http\Controllers\signupController@controlloUsername")->name("controlloUsername");

Route::get('home', 'App\Http\Controllers\homeController@home');
Route::get('eventi', 'App\Http\Controllers\homeController@eventi');

Route::get('/logout', 'App\Http\Controllers\loginController@logout');

//Route::get('recensioni', 'App\Http\Controllers\allController@rece'); 
//Route::get('recensioni', 'App\Http\Controllers\allController@carica'); 
//Route::get('recensioni/{commento}', 'App\Http\Controllers\allController@add_review');

Route::get('avventura', 'App\Http\Controllers\homeController@avventura');
Route::get('cultura', 'App\Http\Controllers\homeController@cultura');
Route::get('divertimento', 'App\Http\Controllers\homeController@divertimento');
Route::get('relax', 'App\Http\Controllers\homeController@relax');


Route::get("/news/{q?}","App\Http\Controllers\homeController@news")->name('news');

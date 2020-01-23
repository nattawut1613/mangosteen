<?php

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

// Route::get('about','SiteController@index')->name('about');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/farmer', 'farmerController@index')->name('farmer');
Route::get('/farmer/destroy/{id}','farmerController@destroy');

Auth::routes();


Route::get('/test', function () {
    return view('test');
});



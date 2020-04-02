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
Route::get('/farmers', 'FarmerController@index')->name('farmers');
Route::get('/farmers/destroy/{id}','FarmerController@destroy');

Route::resource('/farmers','FarmerController')->name('index','farmers');

Route::get('framers', 'FramerController@index');

Route::get('bidders','BidderController@index');
Route::get('/bidders/destroy/{id}','BidderController@destroy');

Route::resource('/bidders','BidderController')->name('index','bidders');

Auth::routes();


Route::get('/test', function () {
    return view('test');
});



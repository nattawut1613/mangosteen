<?php

Route::get('/farmers/sendmangosteen', 'FarmerController@sendmangosteen')->name('sendmangosteen');

Route::get('/farmers/senddetailmangosteen', 'FarmerController@senddetailmangosteen')->name('senddetailmangosteen');

Route::post('famers/addstore', [
    'as' => 'addstore',
    'uses' => 'FarmerController@addstore'
]);
Route::resource('addstore', 'FarmerController' , ['except' => 'addstore']);



Route::get('bidders/mangosteen', 'BidderController@mangosteen')->name('mangosteen');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/farmers/destroy/{id}','FarmerController@destroy');

Route::resource('/farmers','FarmerController')->name('index','farmers');

Route::get('farmers', 'FarmerController@index');

Route::get('bidders','BidderController@index');

Route::get('/bidders/destroy/{id}','BidderController@destroy');

Route::resource('/bidders','BidderController')->name('index','bidders');

Auth::routes();

Route::get('/test', function () {
    return view('test');
});
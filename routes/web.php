<?php

Route::get('/farmers/sellmangosteen', 'FarmerController@sellmangosteen')->name('sellmangosteen');

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
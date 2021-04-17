<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['namespace' => 'Pages'], function(){
	Route::get('/', 'PageController@index');
	Route::get('/about', 'PageController@about');
	Route::get('/portfolio', 'PageController@portfolio');
	Route::get('/contact', 'PageController@contact');
});

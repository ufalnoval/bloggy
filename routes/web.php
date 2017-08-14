<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', 'BlogController@index' );
Route::get('/blog/kategorihome', 'BlogController@kategorihome' );

Route::get('/blog/create', 'BlogController@create');
Route::post('/blog', 'BlogController@store');

Route::get('/blog/{id}', 'BlogController@show');
Route::get('/blog/{id}/edit', 'BlogController@edit');
Route::PUT('/blog/{id}', 'BlogController@update');

Route::delete('/blog/{id}', 'BlogController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

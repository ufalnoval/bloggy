<?php
Route::get('/', function () {
return view('welcome');
});
// BlogController
// routing untuk mengarahkan ke halaman homecreate yang di panggil di BlogController menggunakan method get->untuk menampilkan view nama fungsinya homecreate
Route::get('/blog/homecreate', 'BlogController@homecreate');
// routing untuk mengarahkan ke funcion store yang berada di BlogController menggunakan method get karena data di kirim tidak melalui url tetapi melalui form
Route::post('/blog', 'BlogController@store');
// routing untuk mengarahkan ke halaman homeedit  menggunakan method get->untuk menampilkan view
Route::get('/blog/{id}/homeedit', 'BlogController@homeedit');
// routing untuk mengarahkan ke funtion update menggunakan method put-> untuk mengupdate data
Route::PUT('/blog/{id}', 'BlogController@update');
// Routing yang mengarahkan ke function destroy yang berada di BlogController dan menggunakan method delete yang berfungsi untuk menghapus data
Route::delete('/blog/{id}', 'BlogController@destroy');

// UserController
// routing untuk mengarahkan ke halaman create menggunakan method get->untuk menampilkan view
Route::get('/user/usercreate', 'UserController@usercreate');
// routing untuk mengarahkan ke funcion store yang berada di UserController menggunakan method get karena data di kirim tidak melalui url tetapi melalui form
Route::post('/user', 'UserController@store');
// routing untuk mengarahkan ke halaman useredit method get->untuk menampilkan view
Route::get('/user/{id}/useredit', 'UserController@useredit');
// routing untuk mengarahkan ke funtion update menggunakan method put-> untuk mengupdate data
Route::PUT('/user/{id}', 'UserController@update');
// Routing yang mengarahkan ke function destroy yang berada di BlogController dan menggunakan method delete yang berfungsi untuk menghapus
Route::delete('/user/{id}', 'UserController@destroy');

// KategoriController
// routing untuk mengarahkan ke halaman create menggunakan method get->untuk menampilkan view
Route::get('/blog/kategoricreate', 'KategoriController@kategoricreate');
// routing untuk mengarahkan ke funcion store yang berada di BlogController menggunakan method get karena data di kirim tidak melalui url tetapi melalui form
Route::post('/kategori', 'KategoriController@store');
// routing untuk mengarahkan ke halaman homeedit  menggunakan method get->untuk menampilkan view
Route::get('/kategori/{id}/kategoriedit', 'KategoriController@kategoriedit');
// routing untuk mengarahkan ke funtion update menggunakan method put-> untuk mengupdate data
Route::PUT('/kategori/{id}', 'KategoriController@update');
// Routing yang mengarahkan ke function destroy yang berada di BlogController dan menggunakan method delete yang berfungsi untuk menghapus data
Route::delete('/kategori/{id}', 'KategoriController@destroy');


Route::get('/blog', 'BlogController@index' );
Route::get('/blog/kategorihome', 'BlogController@kategorihome' );
Route::get('/blog/katamutiara', 'BlogController@kategorimutiara' );
Route::get('/blog/katapuisi', 'BlogController@kategoripuisi' );
Route::get('/blog/katakisah', 'BlogController@kategorikisah' );
Route::get('/blog/create', 'BlogController@create');
Route::get('/user/create', 'UserController@create');
Route::get('/kategori/create', 'KategoriController@create');
Route::get('/blog/{id}/edit', 'BlogController@edit');

Route::get('/blog/{id}', 'BlogController@show');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'HomeController@users')->name('users');
Route::get('/kategoris', 'HomeController@kategoris')->name('kategoris');
// Route::get('/blog/ , 'BlogController@homecreate');

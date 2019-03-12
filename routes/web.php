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

Route::get('/', function () {
    return view('welcome');
});

Route::get('kategori', function() {
return "halaman kategori";

});

Route::get('detailkategori/{id}' ,function($id) {
return "halaman detail kategori" . $id;

});

Route::resource('film', 'film_controller')->except(['destroy']);
Route::resource('members', 'members_controller')->except(['destroy']);

Route::get ('master', function() {
    return view ('dashboard.laracontent');
});

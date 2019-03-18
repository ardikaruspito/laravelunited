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

Route::get('query', 'film_controller@search');
Route::get('/film/tambah','film_controller@tambah');
Route::post('/film/store','film_controller@store');
Route::get('/film/hapus/{id}','film_controller@hapus');
Route::get('/film/edit/{id}','film_controller@edit');
Route::post('/film/update','film_controller@update');


Route::resource('film', 'film_controller')->except(['destroy']);
Route::resource('members', 'members_controller')->except(['destroy']);

Route::get ('master', function() {
    return view ('dashboard.laracontent');
});

Route::get ('table', function() {
    return view ('category.index');
});



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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/typography', function () {
    return view('typography');
});

Route::get('/singlepost', function () {
    return view('singlepost');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('dashboardfrontend', function () {
    return view('dashboardfrontend');
});

Route::resource('kategori', 'kategoriController');
Route::resource('tag', 'tagController');
Route::resource('artikel', 'ArtikelController');

Route::resource('berita-terakhir', 'FrontendController@beritaterakhir');

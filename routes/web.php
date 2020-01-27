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
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/blog', function () {
    return view('frontend.blog');
});

Route::get('/single-blog', function () {
    return view('frontend.single-blog');
});

Route::get('/cart', function () {
    return view('frontend.cart');
});

Route::get('/cekout', function () {
    return view('frontend.cekout');
});

Route::get('/shop', function () {
    return view('frontend.shop');
});

Route::get('/produk-single', function () {
    return view('frontend.produk-single');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

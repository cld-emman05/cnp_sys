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

Route::get('/customer', function () {
    return view('dashboard.customer');
});

Route::get('/agent', function () {
    return view('dashboard.agent');
});

Route::get('/admin', function () {
    return view('dashboard.admin');
});

Route::get('/pre-press', function () {
    return view('dashboard.pre-press');
});

Route::get('/purchasing', function () {
    return view('dashboard.purchasing');
});

Route::get('/maps', function () {
    return view('maps');
});

Route::get('/order/create', function () {
    return view('order.create');
});

Route::get('/about-us', function () {
    return view('about.contact');
});

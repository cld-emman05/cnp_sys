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

// User Dashviards
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

// Orders Function

Route::get('/order/create', function () {
    return view('order.create');
});

//Quotations Function

Route::get('/quotation/create', function () {
    return view('quotation.create');
});

//Purchase Function

Route::get('/purchase/create', function () {
    return view('purchase.create');
});

Route::get('/purchase/compute', function () {
    return view('purchase.compute');
});

// About Functions

Route::get('/about-us', function () {
    return view('about.contact');
});

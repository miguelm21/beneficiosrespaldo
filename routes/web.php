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
    return view('pages.index');
});

Route::get('closet-benefits', function () {
    return view('pages.closet-benefits');
});

Route::get('dashboard-admin', function () {
    return view('pages.dashboard-admin');
});

Route::get('details-benefits', function () {
    return view('pages.details-benefits');
});

Route::get('list-benefits-franchise', function () {
    return view('pages.list-benefits-franchise');
});

Route::get('list-benefits', function () {
    return view('pages.list-benefits');
});

Route::get('profile-screen', function () {
    return view('pages.profile-screen');
});

Route::resource('task', 'TaskController', ['except' => 'show', 'create', 'edit']);

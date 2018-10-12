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
    return view('layouts.default');
});


Route::get('/signup',function() {
	return view('users.signup');
})->name('signup');

Route::get('/signin',function() {
	return view('users.signin');
})->name('signin');

Route::get('/edit',function() {
	return view('users.edit');
})->name('edit');

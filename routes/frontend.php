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

// ------- Index --------
Route::get('/', function () {
    return view('web.index');
})->name('web.index');

// ------- Login --------
Route::get('/Login', function () {
    return view('web.login');
})->name('web.login');

// ------- Register --------
Route::get('/Register', function () {
    return view('web.register');
})->name('web.register');

// ------- Contact --------
Route::get('/Contact', function () {
    return view('web.contact.contact');
})->name('web.contact.contact');



// ------- User Dashboard --------
Route::get('/dashboard', function () {
    return view('user.index');
})->name('user.index');

// ------- User Mocktest --------
Route::get('/user-Mocktest', function () {
    return view('user.mocktest.mocktest');
})->name('user.mocktest.mocktest');


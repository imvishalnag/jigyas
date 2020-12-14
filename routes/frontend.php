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
Route::group(['namespace' => 'Web'],function(){
    Route::get('web/user/otp/send/{mobile}','UserController@userOtpSend')->name('admin.user_otp_send');
    Route::group(['prefix' => 'student'],function(){
        Route::post('register','UserController@studentRegister')->name('web.student_register');
        Route::get('/login/form','UserController@loginForm')->name('web.login');
        Route::post('login/submit','UserController@studentLoginSubmit')->name('web.student_login_submit');

        Route::group(['middleware'=>'auth:user'],function(){
            Route::post('logout', 'UserController@logout')->name('user.logout');
            Route::get('/dashboard', 'UserController@index')->name('user.index');
        });
    });
});

// ------- Index --------
Route::get('/', function () {
    return view('web.index');
})->name('web.index');

// ------- Register --------
Route::get('/Register', function () {
    return view('web.register');
})->name('web.register');

// ------- Contact --------
Route::get('/Contact', function () {
    return view('web.contact.contact');
})->name('web.contact.contact');



// ------- check --------
Route::get('/check', function () {
    return view('web.check');
})->name('web.check');



// ------- User Mocktest --------
Route::get('/user-Mocktest', function () {
    return view('user.mocktest.mocktest');
})->name('user.mocktest.mocktest');


<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Admin'],function(){
    Route::get('/admin/login','LoginController@index')->name('admin.login_form');    
    Route::post('login', 'LoginController@adminLogin');
   

    Route::group(['middleware'=>'auth:admin','prefix'=>'admin'],function(){
        Route::get('/dashboard', 'DashboardController@dashboardView')->name('admin.deshboard'); 
        Route::post('logout', 'LoginController@logout')->name('admin.logout');
        Route::get('/change/password/form', 'DashboardController@changePasswordForm')->name('admin.change_password_form');
        Route::post('/change/password', 'DashboardController@changePassword')->name('admin.change_password');   
    });   
});
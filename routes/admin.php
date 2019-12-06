<?php

Route::group(['prefix'  =>  'admin'], function () {

    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    Route::get('/', function () {
        return view('admin.dashboard.index');
    });

});

Route::group(['middleware' => ['auth:admin']], function () {

    Route::get('/', function () {
        return view('admin.dashboard.index');
    })->name('admin.dashboard');

});

Route::group(['prefix' => 'orders'], function () {
   Route::get('/', 'Admin\OrderController@index')->name('admin.orders.index');
   Route::get('/{order}/show', 'Admin\OrderController@show')->name('admin.orders.show');
});
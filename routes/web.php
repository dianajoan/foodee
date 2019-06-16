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
Route::get('/', [
	'as' 	=> 'welcome',
	'uses' 	=> 'PagesController@home',
]);
Route::get('/about', [
	'as' 	=> 'about',
	'uses' 	=> 'PagesController@about',
]);
Route::get('/contact', [
	'as'  => 'contact',
	'uses' => 'PagesController@contact',
]);
Route::get('/careers', [
	'as'  => 'careers',
	'uses' => 'PagesController@careers',
]);
Route::get('/menu', [
	'as'  => 'menu',
	'uses' => 'PagesController@menu',
]);
Route::get('/offers', [
	'as'  => 'offers',
	'uses' => 'PagesController@offers',
]);
Route::get('/products', [
	'as'  => 'products',
	'uses' => 'PagesController@products',
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

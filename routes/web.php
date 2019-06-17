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

Auth::routes(['verify' => true]);
Route::get('home', 'HomeController@index')->name('home');
// welcome page
Route::get('/', [
	'as' 	=> 'welcome',
	'uses' 	=> function(){
		return view('home');
	},
]);

Route::group(['prefix' => 'admin', 'middleware' => ['auth','verified']], function(){

});

Route::group(['prefix' => 'home', 'middleware' => ['auth','verified']], function(){
	// view the food menu
	Route::get('menu', [
		'as'  => 'menu',
		'uses' => 'PagesController@menu',
	]);
	// view the food products
	Route::get('products', [
		'as'  => 'products',
		'uses' => 'PagesController@products',
	]);
});

Route::group(['prefix' => 'web', 'middleware' => 'web'], function(){
	// about page
	Route::get('about', [
		'as' 	=> 'about',
		'uses' 	=> 'PagesController@about',
	]);
	// contact page
	Route::get('contact', [
		'as'  => 'contact',
		'uses' => 'PagesController@contact',
	]);
	// career page
	Route::get('careers', [
		'as'  => 'careers',
		'uses' => 'PagesController@careers',
	]);
	// offer page
	Route::get('offers', [
		'as'  => 'offers',
		'uses' => 'PagesController@offers',
	]);
	// faq page
	Route::get('faq', [
		'as'  => 'faq',
		'uses' => 'PagesController@faq',
	]);
	// help page
	Route::get('help', [
		'as'  => 'help',
		'uses' => 'PagesController@help',
	]);
	// privacy page
	Route::get('privacy', [
		'as'  => 'privacy',
		'uses' => 'PagesController@privacy',
	]);
	// terms page
	Route::get('terms', [
		'as'  => 'terms',
		'uses' => 'PagesController@terms',
	]);
});

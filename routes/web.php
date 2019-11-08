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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'web'], function(){
	Route::get('test',[
		'as' 	=> 'test',
		'uses'	=> function(){
			return view('ohome');
		},
	]);

});

Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:super-admin|admin']], function(){
	Route::resource('/roles', 'RolesController');

	/*
	 * closure pages
	 */
	Route::get('/', [
		'as' 	=> 'admin',
		'uses'	=> 'AdminPageController@index',
	]);
});

Route::group(['prefix'	=> 'admin', 'middleware'	=> ['auth']], function()
	{
		Route::resource('/users', 'UsersController');
	}
);

Route::group(['prefix' => 'home', 'middleware' => ['auth']], function()
{
	Route::get('/user/profile/settings', [
		'as' 	=> 'settings',
		'uses'	=> 'UserPageController@settings',
	]);
	Route::get('/profile', [
		'as' 	=> 'profile',
		'uses'	=> 'UserPageController@profile',
	]);
	Route::post('/user/profile', [
		'as'	=> 'profile.update',
		'uses'	=> 'UserPageController@update_image'
	]);
	Route::post('/user/password/profile', [
		'as'	=> 'password.update',
		'uses'	=> 'UserController@changePassword'
	]);
	
	Route::get('/user', [
		'as' 	=> 'userhome',
		'uses'	=> 'HomeController@userIndex'
	]);
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



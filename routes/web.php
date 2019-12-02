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
    return view('home');
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

Route::group(['prefix' => 'web', 'middleware' => 'web'], function(){
	// about page
	Route::get('about', [
		'as' 	=> 'about',
		'uses' 	=> 'PagesController@about',
	]);
	// blog page
	Route::get('blog', [
		'as' 	=> 'blog',
		'uses' 	=> 'PagesController@blog',
	]);
	// blog page
	Route::get('blogsingle', [
		'as' 	=> 'blog-single',
		'uses' 	=> 'PagesController@blogsingle',
	]);
	// cart page
	Route::get('cart', [
		'as' 	=> 'cart',
		'uses' 	=> 'PagesController@cart',
	]);
	// checkout page
	Route::get('checkout', [
		'as' 	=> 'checkout',
		'uses' 	=> 'PagesController@checkout',
	]);
	// product-single page
	Route::get('productsingle', [
		'as' 	=> 'product-single',
		'uses' 	=> 'PagesController@productsingle',
	]);
	// shop page
	Route::get('shop', [
		'as' 	=> 'shop',
		'uses' 	=> 'PagesController@shop',
	]);
	// wishlist page
	Route::get('wishlist', [
		'as' 	=> 'wishlist',
		'uses' 	=> 'PagesController@wishlist',
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



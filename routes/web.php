<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Auth::routes();
require 'admin.php';

Route::view('/', 'site.pages.home');

Route::get('/category/{slug}', 'Site\CategoryController@show')->name('categories.show');
Route::get('/product/{slug}', 'Site\ProductController@show')->name('product.show');
Route::post('/product/add/cart', 'Site\ProductController@addToCart')->name('product.add.cart');
Route::get('/cart', 'Site\CartController@getCart')->name('checkout.cart');
Route::get('/cart/item/{id}/remove', 'Site\CartController@removeItem')->name('checkout.cart.remove');
Route::get('/cart/clear', 'Site\CartController@clearCart')->name('checkout.cart.clear');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/checkout', 'Site\CheckoutController@getCheckout')->name('checkout.index');
    Route::post('/checkout/order', 'Site\CheckoutController@placeOrder')->name('checkout.place.order');
    Route::get('checkout/payment/complete', 'Site\CheckoutController@complete')->name('checkout.payment.complete');
    Route::get('account/orders', 'Site\AccountController@getOrders')->name('account.orders');
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
	// contact page
	Route::get('contact', [
		'as'  => 'contact',
		'uses' => 'PagesController@contact',
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










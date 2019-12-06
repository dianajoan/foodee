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

Route::group(['prefix' => 'user'], function() {

    Route::group(['middleware' => 'guest'], function() {
    	//register page
        Route::get('/signup', [
            'uses' => 'UserController@getSignup',
            'as'   => 'user.signup',
        ]);

        Route::post('/signup', [
            'uses' => 'UserController@postSignup',
            'as'   => 'user.signup',
        ]);
        //login page
        Route::get('/signin', [
            'uses' => 'UserController@getSignin',
            'as'   => 'user.signin',
        ]);

        Route::post('/signin', [
            'uses' => 'UserController@postSignin',
            'as'   => 'user.signin',
        ]);
	});
});


Route::group(['middleware' => 'auth'], function() {
	//profile page
    Route::get('/profile', [
        'uses' => 'UserController@getProfile',
        'as'   => 'user.profile',
    ]);
    //logout page
    Route::get('/logout', [
        'uses' => 'UserController@getLogout',
        'as'   => 'user.logout',
    ]);

});




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










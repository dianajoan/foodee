<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('home')->with('info','Welcome back!');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth','verified','role:super-admin|admin']], function(){

    Route::resource('/roles', 'RoleController');
    Route::resource('/permissions', 'PermissionController');
    /*
     * closure pages
     */
    Route::get('/', [
      'as'  => 'admin',
      'uses'  => 'AdminPageController@index',
    ]);

});


Route::group(['prefix'  => 'admin', 'middleware'  => ['auth','verified']], function()
  {
    Route::resource('/users', 'UserController');
  }
);

Route::get('/user', [
  'as'  => 'userhome',
  'uses'  => 'HomeController@userIndex'
]);

Route::group(['prefix' => 'home', 'middleware' => ['auth','verified']], function(){

  Route::resource('{type}/{id}/orders', 'OrderController');
  Route::resource('categories', 'CategoryController');
  Route::resource('user/gallery/images', 'ImageController');
  Route::resource('user/galleries', 'GalleryController');

    // closures
  
  Route::get('/user/profile/settings', [
    'as'  => 'settings',
    'uses'  => 'UserPageController@settings',
  ]);
  Route::get('/user/profile', [
    'as'  => 'profile',
    'uses'  => 'UserPageController@profile',
  ]);
  Route::get('/user/profile/timeline', [
    'as'  => 'settings',
    'uses'  => 'UserPageController@settings',
  ]);
  Route::post('/user/profile', [
    'as'  => 'profile.update',
    'uses'  => 'UserPageController@update_image'
  ]);
  Route::post('/user/password/profile', [
    'as'  => 'password.update',
    'uses'  => 'UserController@changePassword'
  ]);
  Route::get('/checkout', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout',
  ]);
  Route::post('/checkout', [
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout',
  ]);


});


Route::get('/products', [
    'uses' => 'ProductController@getDisplay',
    'as' => 'product.display',
]);

Route::get('/add-to-cart/{id}', [
 'uses' => 'ProductController@getAddToCart',
 'as' => 'product.addToCart'
]);

Route::get('/remove/{id}', [
  'uses' => 'ProductController@getRemoveItem',
  'as' => 'product.remove'
]);

Route::get('/shopping-cart', [
  'uses' => 'ProductController@getCart',
  'as' => 'product.cart'
]);


Route::group(['prefix' => 'home', 'middleware' => 'web'], function(){

  Route::resource('{type}/{id}/products', 'ProductController');

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










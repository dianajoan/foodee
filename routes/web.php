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

//////////////////////////////////////////////////////////////////////////////////////////////


Route::group(['prefix' => 'admin', 'middleware' => ['auth','verified','role:super-admin|admin']], function(){

    Route::resource('/roles', 'RoleController');
    Route::resource('/permissions', 'PermissionController');
    Route::get('/', 'AdminPageController@index')->name('admin');

});


//////////////////////////////////////////////////////////////////////////////////////////////////////

Route::group(['prefix'  => 'admin', 'middleware'  => ['auth','verified']], function()
  {
    Route::resource('/users', 'UserController');
  }
);


///////////////////////////////////////////////////////////////////////////////////////////////////

Route::group(['prefix' => 'home', 'middleware' => ['auth','verified']], function(){

  // settings

  Route::get('/user/profile/settings', 'UserPageController@settings')->name('settings');
  Route::get('/user/profile/timeline', 'UserPageController@settings')->name('settings');

  //profile

  Route::get('/user/profile', 'UserPageController@profile')->name('profile');
  Route::post('/user/profile', 'UserPageController@update_image')->name('profile.update');
  Route::post('/user/password/profile', 'UserController@changePassword')->name('password.update');
  
  //checkout

  Route::post('/checkout', 'ProductController@postCheckout')->name('checkout');
  Route::get('/checkout', 'ProductController@getCheckout')->name('checkout');

});

///////////////////////////////////////////////////////////////////////////////////////////////////


//products

Route::get('/all-products', 'ProductController@allProducts')->name('all-products');
Route::get('/product/{product}', 'ProductController@productDetails')->name('product-details');

//shopping cart

Route::get('/add-to-cart/{id}', 'ProductController@getAddToCart')->name('product.addToCart');
Route::get('/remove/{id}', 'ProductController@getRemoveItem')->name('product.remove');
Route::get('/shopping-cart', 'ProductController@getCart')->name('product.cart');


//////////////////////////////////////////////////////////////////////////////////////////////////

Route::group(['prefix' => 'home', 'middleware' => 'web'], function(){

  Route::get('about', 'PagesController@about')->name('about');
  Route::get('contact', 'PagesController@contact')->name('contact');
  Route::get('faq', 'PagesController@faq')->name('faq');
  Route::get('help', 'PagesController@help')->name('help');
  Route::get('privacy', 'PagesController@privacy')->name('privacy');
  Route::get('terms', 'PagesController@terms')->name('terms');  


});

////////////////////////////////////////////////////////////////////////////////////////////////








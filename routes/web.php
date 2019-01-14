<?php

Route::prefix('admin')->group(function ()
{
    Route::middleware('auth:admin')->group(function()
    {

        //Dashboard
        Route::get('/', 'DashboardController@index');

        //Products
        Route::resource('/products','ProductController');

        //orders
        Route::resource('/orders','OrderController');
        Route::get('/confirm/{id}','OrderController@confirm')->name('order.confirm');
        Route::get('/pending/{id}','OrderController@pending')->name('order.pending');

        //users
        Route::resource('/users','UsersController');


        //logout
        Route::get('/logout','AdminUserController@logout');
    });

    //login
    Route::get('/login', 'AdminUserController@index');
    Route::post('/login', 'AdminUserController@store');

});

/*
 * Fronted Routes
 */
Route::get('/','Fronted\HomeController@index');

//user register
Route::get('/user/register','Fronted\RegistrationController@index');
Route::post('/user/register','Fronted\RegistrationController@store');

//User Login
Route::get('/user/login','Fronted\SessionController@index');
Route::post('/user/login','Fronted\SessionController@store');

//logout
Route::get('/user/logout','Fronted\SessionController@logout');

Route::get('/user/profile', 'Fronted\UserProfileController@index');
Route::get('/user/order/{id}', 'Fronted\UserProfileController@show');

//cart section
Route::get('/cart','Fronted\CartController@index');
Route::post('/cart','Fronted\CartController@store')->name('cart');
Route::delete('/cart/remove/{product}','Fronted\CartController@destroy')->name('cart.destroy');
Route::post('/cart/saveLater/{product}','Fronted\CartController@saveLater')->name('cart.saveLater');

//Save Later
Route::delete('/saveForLater/destroy/{product}','Fronted\SaveLaterController@destroy')->name('saveLater.destroy');
Route::post('/cart/moveToCart/{product}','Fronted\SaveLaterController@moveToCart')->name('moveToCart');

//checkout
route::get('/checkout','Fronted\CheckoutController@index');
route::post('/checkout','Fronted\CheckoutController@store')->name('checkout');

Route::get('empty', function() {
    Cart::instance('default')->destroy();
});



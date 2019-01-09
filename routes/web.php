<?php

Route::prefix('admin')->group(function ()
{
    Route::middleware('auth:admin')->group(function ()
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

Route::get('/user/profile', function () {
    return 'Welcome = user';
});





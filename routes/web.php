<?php

Route::get('/', 'DashboardController@index');

//Products
Route::resource('/products','ProductController');

//orders
Route::resource('/orders','OrderController');
Route::get('/confirm/{id}','OrderController@confirm')->name('order.confirm');
Route::get('/pending/{id}','OrderController@pending')->name('order.pending');
//Route::get('/pending','OrderController@pending')->name('order.pending');

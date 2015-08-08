<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ItemController@getItems');
Route::get('content', 'ItemController@getItemsInCart');
Route::get('add-item/{id}', 'ItemController@addItem');
Route::get('remove-item/{id}', 'ItemController@removeItem');
Route::get('checkout', 'ItemController@checkout');
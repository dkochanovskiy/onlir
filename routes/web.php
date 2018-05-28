<?php

Route::get('/', 'WelcomeController@show')->name('welcome');
Route::post('/', 'WelcomeController@store');

Route::get('/search', 'SearchController@show')->name('search');

Auth::routes();

Route::group(['middleware'=>'auth'], function (){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/home', 'HomeController@index');

    Route::get('/settings', 'SettingsController@index')->name('settings');
    Route::post('/settings', 'SettingsController@index');

    Route::get('/purse', 'PurseController@index')->name('purse');
    Route::post('/purse', 'PurseController@index');

    Route::get('/amend-contract', 'AmendContractController@index')->name('amend-contract');
    Route::post('/amend-contract', 'AmendContractController@index');

    Route::get('/ad-delivery', 'AdDeliveryController@index')->name('ad-delivery');
    Route::post('/ad-delivery', 'AdDeliveryController@index');

    Route::get('/favorites', 'FavoritesController@index')->name('favorites');
    Route::post('/favorites', 'FavoritesController@index');
});
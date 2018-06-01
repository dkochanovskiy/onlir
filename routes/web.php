<?php

Route::get('/', 'WelcomeController@show')->name('welcome');
Route::post('/', 'WelcomeController@store');

Route::get('/search', 'SearchController@show')->name('search');

Auth::routes();

Route::group(['prefix'=>'AreaPersonal'],['middleware'=>'auth'], function (){
    Route::get('/my-announcements', 'MyAnnouncementsController@index')->name('my-announcements');
    Route::post('/my-announcements', 'MyAnnouncementsController@index');

    Route::get('/settings', 'AreaPersonal\SettingsController@index')->name('settings');
    Route::post('/settings', 'AreaPersonal\SettingsController@index');

    Route::get('/purse', 'AreaPersonal\PurseController@index')->name('purse');
    Route::post('/purse', 'AreaPersonal\PurseController@index');

    Route::get('/amend-contract', 'AreaPersonal\AmendContractController@index')->name('amend-contract');
    Route::post('/amend-contract', 'AreaPersonal\AmendContractController@index');

    Route::get('/ad-delivery', 'AreaPersonal\AdDeliveryController@index')->name('ad-delivery');
    Route::post('/ad-delivery', 'AreaPersonal\AdDeliveryController@index');

    Route::get('/messages', 'AreaPersonal\MessagesController@index')->name('messages');
//    Route::post('/messages', 'AreaPersonal\MessagesController@index');

    Route::get('/favorites', 'AreaPersonal\FavoritesController@index')->name('favorites');
    Route::post('/favorites', 'AreaPersonal\FavoritesController@index');
});
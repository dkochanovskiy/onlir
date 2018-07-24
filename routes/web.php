<?php

Route::group(['middleware'=>'web'], function(){
    Route::get('/', 'WelcomeController@show')->name('welcome');
    Route::post('/', 'WelcomeController@store');

    Route::get('/rezultaty-poiska', 'SearchController@show')->name('rezultaty-poiska');
    Route::post('/rezultaty-poiska', 'SearchController@show');

    Route::get('/obyavleniye', 'AdController@show')->name('obyavleniye');
    Route::post('/obyavleniye', 'AdController@show');

    Route::get('/obyavleniye-o', 'OAdController@show')->name('obyavleniye-o');
    Route::post('/obyavleniye-o', 'OAdController@show');

    Route::get('/obyavleniye-ta', 'TaAdController@show')->name('obyavleniye-ta');
    Route::post('/obyavleniye-ta', 'TaAdController@show');

    Auth::routes();
});

Route::group(['middleware'=>'auth'], function (){
    Route::get('/moi-obyavleniya', 'AreaPersonal\MyAnnouncementsController@index')->name('moi-obyavleniya');
    Route::post('/moi-obyavleniya', 'AreaPersonal\MyAnnouncementsController@index');

    Route::get('/nastroyki', 'AreaPersonal\SettingsController@index')->name('nastroyki');
    Route::post('/nastroyki', 'AreaPersonal\SettingsController@index');

    Route::get('/koshelek', 'AreaPersonal\PurseController@index')->name('koshelek');
    Route::post('/koshelek', 'AreaPersonal\PurseController@index');

    Route::get('/redaktirovaniye-dogovora', 'AreaPersonal\AmendContractController@index')->name('redaktirovaniye-dogovora');
    Route::post('/redaktirovaniye-dogovora', 'AreaPersonal\AmendContractController@index');

    Route::get('/razmeshcheniye-obyavleniya', 'AreaPersonal\AdDeliveryController@index')->name('razmeshcheniye-obyavleniya');
    Route::post('/razmeshcheniye-obyavleniya', 'AreaPersonal\AdDeliveryController@index');

    Route::get('/soobshcheniya', 'AreaPersonal\MessagesController@index')->name('soobshcheniya');
    Route::post('/soobshcheniya', 'AreaPersonal\MessagesController@postMessages');

    Route::get('/izbrannoye', 'AreaPersonal\FavoritesController@index')->name('izbrannoye');
    Route::post('/izbrannoye', 'AreaPersonal\FavoritesController@index');
});
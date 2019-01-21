<?php

Route::get('/test', 'TestController@showTest')->name('test');
Route::post('/test', 'TestController@showTest');

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

Route::group(['middleware'=>'auth'], function (){
    Route::get('/moi-obyavleniya', 'AreaPersonal\MyAnnouncementsController@index')->name('moi-obyavleniya');
    Route::post('/moi-obyavleniya', 'AreaPersonal\MyAnnouncementsController@index');

    Route::get('/nastroyki', 'AreaPersonal\SettingsController@index')->name('nastroyki');
    Route::post('/nastroyki', 'AreaPersonal\SettingsController@index');

    Route::get('/koshelek', 'AreaPersonal\PurseController@index')->name('koshelek');
    Route::post('/koshelek', 'AreaPersonal\PurseController@index');

    Route::get('/redaktirovaniye-dogovora', 'AreaPersonal\AmendContractController@index')->name('redaktirovaniye-dogovora');
    Route::post('/redaktirovaniye-dogovora', 'AreaPersonal\AmendContractController@index');

    Route::get('/vybor_tipa_nedvizhimosti', 'AreaPersonal\ChoiceOfPropertyTypeController@index')->name('vybor_tipa_nedvizhimosti');

    Route::get('/house', 'AreaPersonal\PropertyTypes\HouseController@index')->name('house');
    Route::post('/house', 'AreaPersonal\PropertyTypes\HouseController@save');

    Route::get('/room', 'AreaPersonal\PropertyTypes\RoomController@index')->name('room');
    Route::post('/room', 'AreaPersonal\PropertyTypes\RoomController@save');

    Route::get('/apartment', 'AreaPersonal\PropertyTypes\ApartmentController@index')->name('apartment');
    Route::post('/apartment', 'AreaPersonal\PropertyTypes\ApartmentController@save');

    Route::get('/cottage', 'AreaPersonal\PropertyTypes\CottageController@index')->name('cottage');
    Route::post('/cottage', 'AreaPersonal\PropertyTypes\CottageController@save');

    Route::get('/ready_business', 'AreaPersonal\PropertyTypes\ReadyBusinessController@index')->name('ready_business');
    Route::post('/ready_business', 'AreaPersonal\PropertyTypes\ReadyBusinessController@save');

    Route::get('/office', 'AreaPersonal\PropertyTypes\OfficeController@index')->name('office');
    Route::post('/office', 'AreaPersonal\PropertyTypes\OfficeController@save');

    Route::get('/trade_area', 'AreaPersonal\PropertyTypes\TradeAreaController@index')->name('trade_area');
    Route::post('/trade_area', 'AreaPersonal\PropertyTypes\TradeAreaController@save');

    Route::get('/warehouse_space', 'AreaPersonal\PropertyTypes\WarehouseSpaceController@index')->name('warehouse_space');
    Route::post('/warehouse_space', 'AreaPersonal\PropertyTypes\WarehouseSpaceController@save');

    Route::get('/free_destination_room', 'AreaPersonal\PropertyTypes\FreeDestinationRoomController@index')->name('free_destination_room');
    Route::post('/free_destination_room', 'AreaPersonal\PropertyTypes\FreeDestinationRoomController@save');

    Route::get('/razmeshcheniye-obyavleniya', 'AreaPersonal\OfferController@index')->name('razmeshcheniye-obyavleniya');
    Route::post('/razmeshcheniye-obyavleniya', 'AreaPersonal\OfferController@save');

    Route::get('/soobshcheniya', 'AreaPersonal\MessagesController@index')->name('soobshcheniya');
    Route::post('/soobshcheniya', 'AreaPersonal\MessagesController@postMessages');

    Route::get('/izbrannoye', 'AreaPersonal\FavoritesController@index')->name('izbrannoye');
    Route::post('/izbrannoye', 'AreaPersonal\FavoritesController@index');
});
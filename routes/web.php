<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'WelcomeController@show')->name('welcome');
Route::post('/', 'WelcomeController@store');

Route::get('/search', 'SearchController@show')->name('search');
//Route::post('/', 'SearchController@store');

//Route::match(['get','post'],'/',['uses'=>'WelcomeController@index','as'=>'welcome']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/my_announcements', 'MyAnnouncementsController@index')->name('my_announcements');
Route::post('/profile', 'ProfileController@index')->name('profile');
Route::post('/purse', 'PurseController@index')->name('purse');
Route::post('/amend_contract', 'AmendContractController@index')->name('amend_contract');

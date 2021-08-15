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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('event', 'EventController@index')->name('events.index');
// Route::get('events/{id}', 'EventsController@show')->name('events.show');
// Route::get('events/category/{category}/{subcategory?}','EventsController@category');
// Route::resource('events', 'EventsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
Route::get('/', 'EventController@index')->name('event.index');

Auth::routes();
Route::get('attend/{id}','eventController@attend')->name('event.attend');
Route::resource('event', 'EventController');
Route::any('search', 'EventController@search')->name('event.search');
Route::group(['prefix' => 'admin', 'namespace'=>'Admin','middleware'=>['auth','admin']], function(){
    Route::resource('user', 'UserController');
});
Route::get('/my-event','DashboardController@myEvent')->name('dashboard.my-event');
Route::any('my-event-search', 'DashboardController@myEventSearch')->name('dashboard.my-event-search');
Route::get('/show-request/{id}','DashboardController@showRequest')->name('dashboard.show-request');
Route::any('attended-event-search','DashboardController@attendedEventSearch')->name('dashboard.attended-event-search');
Route::get('/attended-event','DashboardController@attendedEvent')->name('dashboard.attended-event');
Route::get('/approve/{id}','DashboardController@approveEvent')->name('dashboard.approve');
// Route::get('/', function () {
//     return view('public.welcome');
// });
// Route::get('attend/{id}', function ($id) { })->name('event.attend')->middleware('partisipate');
// Route::resource('event', 'Admin\EventController');
// Route::group(['prefix' => 'member', 'namespace'=>'Member'], function(){
//     Route::resource('event', 'EventController');
// });
// Route::resource('event', 'EventController')->middleware('auth',['except' => [
//     'index', 'show',
// ]]);
// Route::get('/dashboard/index', 'DashboardController@index')->name('dashboard.index');

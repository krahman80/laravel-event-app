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
Route::get('partisipate/{id}', function ($id) { })->name('event.partisipate')->middleware('partisipate');;
Auth::routes();
Route::resource('event', 'EventController');
Route::get('/', 'EventController@index')->name('event.index');
Route::group(['prefix' => 'admin', 'namespace'=>'Admin','middleware'=>['auth','admin']], function(){
    Route::resource('user', 'UserController');
});
Route::get('/my-event','DashboardController@myEvent')->name('dashboard.my-event');
Route::get('/attended-event','DashboardController@attendedEvent')->name('dashboard.attended-event');

// Route::get('/', function () {
//     return view('public.welcome');
// });
// Route::get('partisipate/{id}','HomeController@partisipate')->name('partisipate')->middleware('auth');
// Route::resource('event', 'Admin\EventController');
// Route::group(['prefix' => 'member', 'namespace'=>'Member'], function(){
//     Route::resource('event', 'EventController');
// });
// Route::resource('event', 'EventController')->middleware('auth',['except' => [
//     'index', 'show',
// ]]);
// Route::get('/dashboard/index', 'DashboardController@index')->name('dashboard.index');

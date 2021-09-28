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
//     return view('public.welcome');
// });

// Route::get('partisipate/{id}','HomeController@partisipate')->name('partisipate')->middleware('auth');
Route::get('partisipate/{id}', function ($id) { })->name('event.partisipate')->middleware('partisipate');;
Route::get('/', 'HomeController@index')->name('home');
Auth::routes();
// Route::resource('event', 'Admin\EventController');
Route::group(['prefix' => 'member', 'namespace'=>'Member','middleware'=>'auth'], function(){
    Route::resource('event', 'EventController');
});
Route::group(['prefix' => 'admin', 'namespace'=>'Admin','middleware'=>['auth','admin']], function(){
    Route::resource('user', 'UserController');
});
// Route::get('/dashboard/index', 'DashboardController@index')->name('dashboard.index');

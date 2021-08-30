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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('partisipate/{id}','HomeController@partisipate')->name('partisipate')->middleware('auth');
Route::get('partisipate/{id}', function ($id) {
})->name('home.partisipate')->middleware('partisipate');;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

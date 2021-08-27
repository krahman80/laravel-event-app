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

// Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/', 'EventController@index')->name('events.index');
Route::get('event/{id}', 'EventController@show')->name('events.show');
Route::any('search','EventController@search')->name('events.search');
// Route::post('search',
// function(\Illuminate\Http\Request $request)
// {
//     // var_dump($request->all());
//     dd($request->all());
// }
// );
// Route::get('events/category/{category}/{subcategory?}','EventsController@category');
// Route::resource('events', 'EventsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/partisipate/{id}', 'HomeController@partisipate')->name('home.partisipate');

// Route::get('partisipate/{id}', 'HomeController@partisipate')->middleware(['partisipate'])->name('home.partisipate');
// Route::get('partisipate/{id}', function () {})->middleware('partisipate')->name('home.partisipate');
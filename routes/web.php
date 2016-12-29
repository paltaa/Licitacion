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

//Route::get('about', function() {
//	return view('pages.about');
//});


Route::get('about','PagesController@about');
//Route::get('Licitaciones/{MakerID}', 'PagesController@show');
//Route::get('nuevalicit', 'PagesController@nuevalicit');

//Route::post('user/{}/licit', ' PagesController@addLicit');

Route::get('create', 'LicitController@add');
Route::post('created', 'LicitController@store');
Route::post('welcome','PagesController@welcome');
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('App', 'PagesController@app');

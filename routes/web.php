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
    return view('backend.layouts.master');
});
/* cars*/
Route::get('/cars/create', 'CarController@create');
Route::get('cars/{car}', 'CarController@show');
/*deals */
Route::get('/deals/create', 'DealController@create');
Route::get('/deals', 'DealController@index');
Route::get('/deals/search', 'DealController@search')->name('deal-search');

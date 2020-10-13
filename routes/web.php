<?php

use Illuminate\Support\Facades\Route;

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
    return view('unitsconverter.convert');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/converter', 'MainController@index')->name('converter');

//API
Route::get('/getUnits1/{amount}', 'FetchStuffController@getUnits1');
Route::get('/getUnits2/{amount}', 'FetchStuffController@getUnits2');
Route::get('/getUnits3/{amount}', 'FetchStuffController@getUnits3');

Route::get('/getAmount/{units}', 'FetchStuffController@getAmount');

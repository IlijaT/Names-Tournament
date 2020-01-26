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

Route::get('/tournaments/{tournament}', 'TournamentsController@show')->name('tournaments.show');
Route::post('/tournaments', 'TournamentsController@store')->name('tournaments.store');
Route::post('/tournaments/{tournament}/quarter-final', 'QuarterFinalsController@store')->name('quarter-final.store');
Route::get('/tournaments/{tournament}/quarter-final', 'QuarterFinalsController@show')->name('quarter-final.show');

Route::post('/tournaments/{tournament}/semi-final', 'SemiFinalsController@store')->name('semi-final.store');


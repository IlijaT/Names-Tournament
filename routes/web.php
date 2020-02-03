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
})->name('welcome');

Route::get('/tournaments/{tournament}', 'TournamentsController@show')->name('tournaments.show');
Route::post('/tournaments', 'TournamentsController@store')->name('tournaments.store');

Route::get('/tournaments/{tournament}/quarter-final', 'QuarterFinalsController@show')->name('quarter-finals.show');
Route::post('/tournaments/{tournament}/quarter-final', 'QuarterFinalsController@store')->name('quarter-finals.store');

Route::get('/tournaments/{tournament}/semi-final', 'SemiFinalsController@show')->name('semi-finals.show');
Route::post('/tournaments/{tournament}/semi-final', 'SemiFinalsController@store')->name('semi-finals.store');

Route::get('/tournaments/{tournament}/final', 'FinalsController@show')->name('finals.show');
Route::post('/tournaments/{tournament}/final', 'FinalsController@store')->name('finals.store');

Route::get('/tournaments/{tournament}/winner', 'WinnersController@show')->name('winners.show');
Route::post('/tournaments/{tournament}/winner', 'WinnersController@store')->name('winners.store');

Route::get('/rankings', 'RankingsController@index')->name('rankings');
Route::get('/test', function () {
    return 'test';
});

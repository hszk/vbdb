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

Route::get('/player', 'PlayerController@index');
Route::get('/player/{task_id}', 'PlayerController@show');

Route::get('/competitions', 'CompetitionController@index');
Route::get('/competitions/{compe_code}', 'CompetitionController@show');
Route::get('/competitions/{compe_code}/{year}', 'CompetitionController@year');
Route::get('/competitions/{compe_code}/{year}/{country}', 'CompetitionController@country');

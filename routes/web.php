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

Auth::routes();

//Route::get('/home', 'TicketController@index')->name('home');
Route::get('/dashboard', 'TicketController@index')->name('dashboard');
Route::get('/create_ticket', 'TicketController@create')->name('create_ticket');
Route::get('/show', 'TicketController@show')->name('dashboard');

Route::post('/store_ticket', 'TicketController@store_ticket')->name('store_ticket');
Route::post('/destroy_ticket', 'TicketController@destroy_ticket')->name('destroy_ticket');
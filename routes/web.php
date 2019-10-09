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
Route::get('/destroy_ticket/{id}', 'TicketController@destroy_ticket')->name('destroy_ticket');
Route::get('/edit_ticket/{id}', 'TicketController@edit_ticket')->name('edit-ticket');
Route::get('/ticket_details/{id}', 'TicketController@ticket_details')->name('ticket_details');

Route::post('/update_ticket', 'TicketController@update_ticket')->name('update_ticket');
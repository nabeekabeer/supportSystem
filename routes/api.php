<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/home', 'HomeController@index');
Route::get('/create_ticket', 'TicketController@create');
Route::get('/store_ticket', 'TicketController@store');

Route::get('/show_ticket', 'TicketController@show');
Route::get('/edit_ticket{$id}', 'TicketController@edit');
Route::post('/update_ticket', 'TicketController@update');
Route::post('/delete_ticket{}', 'TicketController@destroy');
    //hello
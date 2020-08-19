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

/**
 * Event Routes
 */
Route::get('/v1/events', 'EventController@index')->name('event.index');
Route::post('/v1/events', 'EventController@store')->name('event.store');
Route::put('/v1/events', 'EventController@update')->name('event.update');
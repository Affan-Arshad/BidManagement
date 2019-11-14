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

Route::get('cards', 'CardController@index');

Route::get('ongoingBids', 'APIController@ongoingBids');
Route::get('bidsByStatus', 'APIController@bidsByStatus');
Route::get('statuses', 'APIController@statuses');
Route::post('bids/{bid}', 'APIController@update');

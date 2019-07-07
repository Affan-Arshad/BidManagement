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

Route::middleware('auth')->group(function(){
    Route::get('/', function(){
        return redirect('/organizations');
    });
    
    Route::resource('organizations', 'OrganizationController');
    Route::resource('bidders', 'BidderController');
    
    Route::resource('bids', 'BidController');
    Route::post('/bids/{bid}/bidders', 'BidController@addBidders');
    Route::delete('/bids/{bid}/bidders/{bidder}', 'BidController@removeBidder');
});
Auth::routes(['register' => false]);

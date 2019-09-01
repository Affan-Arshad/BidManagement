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
        return redirect('/dashboard');
    });
    
    Route::get('/dashboard', 'DashboardController@index');

    Route::resource('/organizations', 'OrganizationController');
    Route::resource('/bidders', 'BidderController');
    
    Route::resource('/bids', 'BidController');
    Route::resource('/bids/{bid}/proposals', 'ProposalController');
    Route::resource('/bids/{bid}/evaluations', 'EvaluationController');
    Route::resource('/bids/{bid}/lots', 'LotController');
});
Auth::routes(['register' => false]);

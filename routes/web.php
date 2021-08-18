<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BidController;
use App\Http\Controllers\LotController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PushController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\BidderController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\PCRController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/', function () {
        return redirect('/dashboard');
    });

    Route::get('/dashboard', [DashboardController::class, 'index']);
    // Route::get('/dashboard', function () {
    //     return view('index');
    // });

    Route::resource('/organizations', OrganizationController::class);
    Route::resource('/bidders', BidderController::class);

    Route::resource('/bids', BidController::class);
    Route::resource('/bids/{bid}/proposals', ProposalController::class);
    Route::resource('/bids/{bid}/evaluations', EvaluationController::class);
    Route::resource('/bids/{bid}/lots', LotController::class);
    Route::resource('/bids/{bid}/notes', NoteController::class);
    
    Route::resource('/tasks', TaskController::class);

    Route::get('/pcr', [PCRController::class, 'create']);
    Route::post('/pcr', [PCRController::class, 'upload']);
    Route::get('/pcr/{pcr_id}', [PCRController::class, 'show']);
});

//store a push subscriber.
Route::post('/push', [PushController::class, 'store']);
//make a push notification.
Route::get('/push/bidsToday', [PushController::class, 'bidsToday'])->name('bidsToday');
Route::get('/push/bidsTomorrow', [PushController::class, 'bidsTomorrow'])->name('bidsTomorrow');

// 
Route::get('/admin', function () {
    return view('index');
});


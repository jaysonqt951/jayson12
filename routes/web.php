<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;



Route::get('/.j1/Transaction', action:[TransactionController::class, 'getBookings']);
Route::get('/.j2/Transaction', action: [TransactionController::class, 'getBookingsData']);
Route::get('/.j3/Transaction', action: [TransactionController::class, 'getBookingsChallenging']);
Route::get('/.j4/Transaction', action: [TransactionController::class, 'getBookingsDifficult']);

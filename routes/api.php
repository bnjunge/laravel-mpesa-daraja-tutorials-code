<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\payments\mpesa\MPESAController;
use App\Http\Controllers\payments\mpesa\MPESAResponsesController;


Route::post('validation', [MPESAResponsesController::class, 'validation']);
Route::post('confirmation', [MPESAResponsesController::class, 'confirmation']);
Route::post('stkpush', [MPESAResponsesController::class, 'stkPush']);
Route::post('b2ccallback', [MPESAResponsesController::class, 'b2cCallback']);
Route::post('transaction-status/result_url', [MPESAResponsesController::class, 'transactionStatusResponse']);
Route::post('reversal/result_url', [MPESAResponsesController::class, 'transactionReversal']);

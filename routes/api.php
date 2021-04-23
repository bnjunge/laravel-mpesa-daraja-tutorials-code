<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\payments\mpesa\MPESAResponsesController;


Route::post('validation', [MPESAResponsesController::class, 'validation']);
Route::post('confirmation', [MPESAResponsesController::class, 'confirmation']);
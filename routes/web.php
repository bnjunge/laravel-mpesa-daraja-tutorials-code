<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\payments\mpesa\MPESAController;

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

Route::post('get-token', [MPESAController::class, 'getAccessToken']);
Route::post('register-urls', [MPESAController::class, 'registerURLS']);
Route::post('simulate', [MPESAController::class, 'simulateTransaction']);
Route::post('stkpush', [MPESAController::class, 'stkPush']);
Route::post('simulateb2c', [MPESAController::class, 'b2cRequest']);
Route::post('check-status', [MPESAController::class, 'transactionStatus']);
Route::post('reversal', [MPESAController::class, 'reverseTransaction']);


Route::get('stk', function(){
    return view('stk');
});

Route::get('b2c', function(){
    return view('b2c');
});
Route::get('transaction-status', function(){
    return view('status');
});
Route::get('reverse', function(){
    return view('reverse');
});


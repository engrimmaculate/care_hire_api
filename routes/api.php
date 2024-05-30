<?php

use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\Api\CarController;
use App\Http\Controllers\Api\CarDriverController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\CompanyController;
use App\Models\Booking;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Auth Route for Auth Controller

Route::controller(AuthController::class)->group(function(){
    Route::post('register','register');
    Route::post('login','login');
    Route::get('userdetail','userDetails');
    Route::post('emailverify','emailverify');
    Route::post('verify-email', 'verifyEmail');
    Route::post('forgotpassword','forgotpassword');
    Route::post('changepassword','changepassword');
});

// Car Api respurce routes
Route::apiResource('car', CarController::class);
// Booking Api resource routes
Route::apiResource('booking', BookingController::class);
// car Drivers Api resource routes
Route::apiResource('driver', CarDriverController::class);

<?php

use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Hiring\TravelController;
use App\Http\Controllers\Hiring\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('companies', CompanyController::class);
Route::apiResource('travels', TravelController::class);
Route::apiResource('users', UserController::class);
<?php

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

Route::get('/v1/provinces', [\App\Http\Controllers\api\v1\ProvincesController::class, 'index']);
Route::get('/v1/regencies', [\App\Http\Controllers\api\v1\RegencyController::class, 'index']);
Route::get('/v1/districts', [\App\Http\Controllers\api\v1\DistrictController::class, 'index']);
Route::get('/v1/sub-districts', [\App\Http\Controllers\api\v1\SubDistrictController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

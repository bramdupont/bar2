<?php

use App\Http\Controllers\DrankUserController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrankController;
use App\Http\Controllers\ConsumptieController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/dranken', [DrankController::class, 'index']);
Route::prefix('/drank')->group(function() {
    Route::post('/store', [DrankController::class, 'store']);
    Route::put('/{id}', [DrankController::class, 'update']);
    Route::delete('/{id}', [DrankController::class, 'destroy']);
});

Route::get('/consumpties', [DrankUserController::class, 'index']);
Route::prefix('/consumptie')->group(function() {
    Route::get('/{id}', [DrankUserController::class, 'getSingle']);
    Route::post('/store', [DrankUserController::class, 'store']);
    Route::put('/{id}/{amount}', [DrankUserController::class, 'update']);
    Route::delete('/{id}', [DrankUserController::class, 'destroy']);
});

Route::get('/gebruikers', [UserController::class, 'index']);
Route::get('/gebruiker', [UserController::class, 'getSingle']);
Route::prefix('/gebruiker')->group(function() {
    Route::post('/store', [UserController::class, 'store']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);



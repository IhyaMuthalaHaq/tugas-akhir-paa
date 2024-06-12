<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FileController;


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
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::get('passwords/user/{user_id}', [PasswordController::class, 'index']);
Route::get('passwords/{id}', [PasswordController::class, 'show']);
Route::post('passwords', [PasswordController::class, 'store']);
Route::put('passwords/{id}', [PasswordController::class, 'update']);
Route::delete('passwords/{id}', [PasswordController::class, 'delete']);


Route::get('files/user/{user_id}', [FileController::class, 'index']);
Route::get('files/{id}', [FileController::class, 'show']);
Route::post('files', [FileController::class, 'store']);
Route::put('files/{id}', [FileController::class, 'update']);
Route::delete('files/{id}', [FileController::class, 'delete']);




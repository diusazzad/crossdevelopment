<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\StudentDashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/student', [StudentDashboardController::class, 'index']);
Route::get('/hello', function () {
    return ['message' => 'Hello, World!'];
});


// Auth
// Route::post('/register', [AuthController::class, 'register'])->name('api.register');
// Route::post('/login', [AuthController::class, 'login'])->name('api.login');

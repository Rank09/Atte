<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendancedController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\RestController;

Route::middleware('auth')->group(function () {
    Route::get('/', [AttendancedController::class, 'index']);
    Route::get('/attendance/{num}', [AttendancedController::class, 'attendance']);
    Route::post('/attendance', [AttendancedController::class, 'list']);
    Route::post('/attendance/start', [AttendancedController::class, 'add']);
    Route::post('/attendance/end', [AttendancedController::class, 'save']);
    Route::get('/rest', [RestController::class, 'list']);
    Route::post('/rest/start', [RestController::class, 'add']);
    Route::post('/rest/end', [RestController::class, 'save']);
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);
});

Route::get('/register', [AttendancedController::class, 'well']);

require __DIR__ . '/auth.php';

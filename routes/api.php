<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

    Route::get('/policies', [App\Http\Controllers\PolicyController::class, 'index']);
    Route::get('/policies/{id}', [App\Http\Controllers\PolicyController::class, 'show']);
   
    Route::get('/claims', [App\Http\Controllers\ClaimController::class, 'index']);
    Route::get('/claims/{id}', [App\Http\Controllers\ClaimController::class, 'show']);
    
    Route::get('/invoices', [App\Http\Controllers\InvoiceController::class, 'index']);
    Route::get('/invoices/{id}', [App\Http\Controllers\InvoiceController::class, 'show']);

    Route::get('/payments', [App\Http\Controllers\PaymentController::class, 'index']);
    Route::get('/payments/{id}', [App\Http\Controllers\PaymentController::class, 'show']);

    Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);
    Route::get('/users/{id}', [App\Http\Controllers\UserController::class, 'show']);

    Route::get('/notifications', [App\Http\Controllers\NotificationController::class, 'index']);
    Route::get('/notifiactions/{id}', [App\Http\Controllers\NotificationController::class, 'show']);

    Route::get('/users/{id}/claims', [UserController::class, 'claims']);
    Route::get('/users/{id}/invoices', [UserController::class, 'invoices']);
    Route::get('/users/{id}/policies', [UserController::class, 'policies']);
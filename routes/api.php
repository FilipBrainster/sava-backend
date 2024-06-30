<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ClaimController;
use App\Http\Controllers\InvoiceController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

    Route::get('/policies', [App\Http\Controllers\PolicyController::class, 'index']);
    Route::get('/policies/{id}', [App\Http\Controllers\PolicyController::class, 'show']);
    // Route::post('/policies', 'App\Http\Controllers\PolicyController@store');
    // Route::put('/policies/{id}', 'App\Http\Controllers\PolicyController@update');  
    // Route::delete('/policies/{id}', 'App\Http\Controllers\PolicyController@delete');

    Route::get('/claims', [App\Http\Controllers\ClaimController::class, 'index']);
    Route::get('/claims/{id}', [App\Http\Controllers\ClaimController::class, 'show']);
    // Route::post('/claims', 'App\Http\Controllers\ClaimController@store');
    // Route::put('/claims/{id}', 'App\Http\Controllers\ClaimController@update');  
    // Route::delete('/claims/{id}', 'App\Http\Controllers\ClaimController@delete');

    // user/{id}/policies
    // user/{id}/claims

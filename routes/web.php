<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

// Route::get('/policies', function () {
//     return [
//         'data' => true
//     ];
// });

require __DIR__.'/auth.php';

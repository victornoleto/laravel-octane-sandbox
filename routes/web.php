<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/datetime', function () {
    return response()->json([
        'datetime' => now()
    ]);
});
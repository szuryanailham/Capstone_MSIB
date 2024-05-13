<?php
use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers\User')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});


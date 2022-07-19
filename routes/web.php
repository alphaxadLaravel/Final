<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

// Route Janja zote ziko hapa

// Login Route hii hapa
Route::get('/', function () {
    return view('outside.login');
});

// Forgot Password Hii hapa
Route::get('/forgot', function () {
    return view('outside.forgot');
});

// Register route hii hapa
Route::get('/register', function () {
    return view('outside.register');
});

// register company here
Route::post('/new_company',[LoginController::class,'newCompany']);


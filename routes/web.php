<?php

use Illuminate\Support\Facades\Route;

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

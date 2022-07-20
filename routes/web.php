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

// The Dashboard page here
Route::get('/dashboard', function () {
    return view('common.dashboard');
});

// field letter here
Route::get('/field_letter', function () {
    return view('common.field_letter');
});

// All supervisors
Route::get('/all_supervisors', function () {
    return view('hod.all_supervisors');
});

// all students
Route::get('/all_students', function () {
    return view('common.students');
});

// All allocations here
Route::get('/allocations', function () {
    return view('common.allocations');
});

// Companies list here
Route::get('/company_list', function () {
    return view('common.companies_list');
});


// student logbooks
Route::get('/student_logbooks', function () {
    return view('supervisor.student_logbooks');
});

// logbook preeview here
Route::get('/fill_logbook', function () {
    return view('student.fill_logbook');
});

// previview logbook here
Route::get('/logbook_preview', function () {
    return view('common.logbook_preview');
});

// company make requests here
Route::get('/make_requests', function () {
    return view('hr.make_request');
});

// my  own allocation here
Route::get('/my_allocation', function () {
    return view('student.my_allocation');
});

// Students responses here
Route::get('/responses', function () {
    return view('common.responses');
});

// register company here
Route::post('/new_company',[LoginController::class,'newCompany']);

// Login users route here
Route::post('/walete',[LoginController::class,'walete']);



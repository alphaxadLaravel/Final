<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\HostController;
use App\Http\Controllers\LettersController;
use App\Http\Controllers\LogBookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupervisorController;

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

// Single supervisor
Route::get('/single/{id}',[SupervisorController::class,'single']);

// Route to fill the logbook
Route::post('/fillLogbook', [LogBookController::class,'fillLogbook']);

// remove student from supervisor
Route::get('/delete/{id}',[SupervisorController::class,'delete']);


// field letter here
Route::get('/field_letter',[LettersController::class,'showLetter']);

// Download field letter here
Route::get('/download',[LettersController::class,'downloadLetter']);

// GO to student Profile here
Route::get('/profile/{id}',[ProfileController::class,'gotoProfile']);

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



// Preview Logbook here
Route::get('/logbook_preview',[LogbookController::class,'previewLogbook']);

Route::get('/logbook/{id}',[LogbookController::class,'studentlogbook']);

// company make requests here
Route::get('/make_request',[CompanyController::class,'sendRequest']);

// send a request here
Route::post('/sending',[CompanyController::class,'requestForm']);

// Accept request here
Route::get('/accept/{id}',[CompanyController::class,'accept']);
Route::get('/denied/{id}',[CompanyController::class,'denied']);

// student Accept Company here
Route::get('/student/{id}',[CompanyController::class,'studentAccept']);

Route::get('/my_requests', function () {
    return view('hr.my_requests');
});

Route::get('/my_allocation',[FieldController::class,'showAllocation']);

// Students responses here
Route::get('/responses', function () {
    return view('common.responses');
});

// Host Supervisors
Route::get('/host_supervisors', function () {
    return view('hr.host_supervisors');
});

// Go add host
Route::get('/add_host',[HostController::class,'goAddHost']);

// register host supervisor
Route::post('/new_host',[HostController::class,'addhost']);

// Departments
Route::get('/departments',[DepartmentController::class,'goDepartment']);

// Add new department
Route::post('/add_department',[DepartmentController::class,'newDepartment']);

// register company here
Route::post('/new_company',[LoginController::class,'newCompany']);

// Login users route here
Route::post('/walete',[LoginController::class,'walete']);

// Upload letter here
Route::post('/upload',[LettersController::class,'upload']);




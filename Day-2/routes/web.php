<?php

use App\Http\Controllers\SecondController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('students', [StudentController::class, 'index']);
// Route::get('about', [StudentController::class, 'about']);

Route::controller(StudentController::class)->group( function(){
    Route::get('students', 'index');
    Route::get('about-us', 'about');
    Route::get('student-list', 'DispayStudent');
    Route::get('/student-detail/{id}', 'search');
});

//for single action
Route::get('invoke', TestController::class);

Route::get('second-test', [SecondController::class, 'index']);
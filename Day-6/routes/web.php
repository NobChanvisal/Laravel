<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::controller(StudentController::class)->group(function(){
//     Route::get('/students/index', 'index')->name('students.index');
//     Route::get('/students', 'store')->name('students.store');
// });

Route::resource('students', StudentController::class);
Route::controller(UserController::class)->group(function(){
    Route::get('/users', 'index')->name('users.index');
});
Route::controller(TeacherController::class)->group(function(){
    Route::get('/teachers', 'index')->name('teachers.index');
});
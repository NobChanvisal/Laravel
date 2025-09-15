<?php

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::controller(TeacherController::class)->group(function () {
    Route::get('/teachers', 'index')->name('teachers.index');      
    Route::get('/teachers/create', 'create')->name('teachers.create'); 
    Route::post('/teachers', 'store')->name('teachers.store');
    Route::get('/teachers/{id}', 'show')->name('teachers.show');
    Route::get('/teachers/{id}/edit', 'edit')->name('teachers.edit');
    Route::put('/teachers/{id}', 'update')->name('teachers.update');
    Route::delete('/teachers/{id}', 'destroy')->name('teachers.destroy');
});
// Route::resource('teachers', TeacherController::class);
Route::resource('courses', CourseController::class);
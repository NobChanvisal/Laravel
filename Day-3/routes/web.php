<?php


use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('teacher-index', [TeacherController::class,'index']);
Route::get('add-teacher',[TeacherController::class, 'add']);
Route::get('search-teacher/{id}',[TeacherController::class, 'show']);
Route::get('update-teacher/{id}',[TeacherController::class, 'update']);
Route::get('delete-teacher/{id}',[TeacherController::class, 'delete']);



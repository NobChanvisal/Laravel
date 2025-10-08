<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        // $allstudent = Student::with('users')->get();
        // return $allstudent;
        $allteacher = Teacher::with('users')->get();
        return $allteacher;

        // $all = User::with(['student','teacher'])->get();
        // return $all;
    }
}

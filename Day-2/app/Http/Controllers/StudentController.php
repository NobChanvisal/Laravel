<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(){
        return 'this hello at index function from controller....';
    }

    public function about(){
        return 'this hello at about function from controller....';
    }
    public function DispayStudent(){
        // $student = ['id' => 1, 'name' => 'Jane Doe', 'deparment' => 'IT'];
        $student = [
            ['id' => 1, 'name' => 'Jane Doe', 'deparment' => 'IT'],
            ['id' => 2, 'name' => 'Jasmine', 'deparment' => 'English'],
            ['id' => 3, 'name' => 'Jan', 'deparment' => 'IT']
        ];
        return view('studentList', ['students' => $student]);            
    }

    public function search($id){
        $students = [
            ['id' => 1, 'name' => 'Jane Doe', 'deparment' => 'IT'],
            ['id' => 2, 'name' => 'Jasmine', 'deparment' => 'English'],
            ['id' => 3, 'name' => 'Jan', 'deparment' => 'IT']
        ];
        $findStudent = null;
        foreach($students as $stu){
            if($stu['id'] == $id){
                $findStudent = $stu;
                break;
            }
        }

        if($findStudent){
            return view('studentDetail', ['student' => $findStudent]);            
        }
    }
}

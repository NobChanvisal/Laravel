<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
    public function index(){
        return Teacher::all();
    }

    public function add(){
        $item = new Teacher();
        $item->name = 'New name';
        $item->save();
        return "Add successfull !!";
    }
    public function show($id){
        $item = Teacher::findOrFail($id);
        return $item;
    }
    public function update($id){
        $item = Teacher::findOrFail($id);
        $item->name = "Updated name";
        $item->update();
        return "Upate successfull !";
    }

    public function delete($id){
        $item = Teacher::findOrFail($id);
        $item->delete();
        return "Delete successfull !";
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $course = Course::all();
        return view('courses.index',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('courses.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate([
            'name' => 'required|max:100',
            'description' => 'required|max:200',
        ]);
        Course::create($validate);
         return redirect()->route('courses.index')->with('success', 'Course created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $course = Course::findOrFail($id);
        return view('courses.courseDetail', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $course = Course::findOrFail($id);
        return view('courses.editForm', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validate = $request->validate([
            'name' => 'required|max:100',
            'description' => 'required|max:200',
        ]);
        $course = Course::findOrFail($id);
        $course->update($validate);
        // Course::where('id', $id)->update($validate);

         return redirect()->route('courses.index')
                     ->with('success', 'course updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $course = Course::findOrFail($id);
        $course->delete();
         return redirect()->route('courses.index')
                     ->with('success', 'course deleted successfully!');
    }   
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentAddRequest;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //
        $students = Student::paginate(12);
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentAddRequest $request)
    {
        // dd($request->all());

        // $validated = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email|unique:tbstudents,email',
        //     'score' => 'required|integer|min:0|max:100',
        //     'DOB' => 'required|date',
        //     'gender' => 'required|in:m,f',
        // ]);
        // dd($validated);
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('photos', 'public');
        }

        Student::create($data);
        return redirect()->route('students.index')->with('success', 'Student created successfully!');   
        
    }

    /**
     * Display the specified resource.  
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentAddRequest $request, string $id)
    {
        //
        $student = Student::findOrFail($id);

        $data = $request->validated();
        
        if ($request->hasFile('image')) {
            // Store new image
            $data['image'] = $request->file('image')->store('photos', 'public');

            // Delete old image from storage if it exists
            if ($student->image && Storage::disk('public')->exists($student->image)) {
                Storage::disk('public')->delete($student->image);
            }
        }
        
        $student->update($data);

        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $student = Student::findOrFail($id);

        // Delete image from storage if it exists
        if ($student->image && Storage::disk('public')->exists($student->image)) {
            Storage::disk('public')->delete($student->image);
        }
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }
}

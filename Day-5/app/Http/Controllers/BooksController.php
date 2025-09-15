<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|decimal:0,2|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        
        $imageFile = $request->file('image'); //Get the uploaded file

        $imageName = time() . '.' . $imageFile->extension();
        //note : echo time(); // 1757929885
        //       $imageFile->extension();// jpg, png;

        
        $imageFile->move(public_path('images/books'), $imageName); // Move the uploaded image to the public folder
        $validatedData['image'] = 'images/books/' . $imageName;

        Book::create($validatedData);
        return redirect()->route('books.index')->with('success', 'Book added successfully!');
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
        $book = Book::findOrFail($id);
        return view('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $book = Book::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|decimal:0,2|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($book->image && file_exists(public_path($book->image))) {
                unlink(public_path($book->image));
            }
            
            // Handle new image upload
            $imageFile = $request->file('image');
            $imageName = time() . '.' . $imageFile->extension();
            $imageFile->move(public_path('images/books'), $imageName);
            $validatedData['image'] = 'images/books/' . $imageName;
        } else {
            // Keep existing image if no new image is uploaded               
            $validatedData['image'] = $book->image;
        }

        $book->update($validatedData);
        return redirect()->route('books.index')->with('success', 'Book updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

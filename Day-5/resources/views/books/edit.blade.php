<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a New Book</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body class=" bg-slate-50">

<div class=" max-w-96 mx-auto p-5 shadow m-5">
    <h2 class=" text-2xl mb-4">Update Book</h2>

    
    {{-- The main form for adding a book --}}
    <form action="{{ route('books.update',$book->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name"  class="block mb-2 text-sm text-slate-600">Book Name</label>
            <input type="text" value="{{$book->name}}" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" id="name" name="name" value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label for="price"  class="block mb-2 text-sm text-slate-600">Price</label>
            <input type="number" value="{{$book->price}}" step="0.01" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" id="price" name="price" value="{{ old('price') }}">
        </div>

        <div class="mb-3">
            <label for="stock"  class="block mb-2 text-sm text-slate-600">Stock</label>
            <input type="number" value="{{$book->stock}}" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" id="stock" name="stock" value="{{ old('stock') }}">
        </div>

        <div class="mb-3">
            <label for="image"  class="block mb-2 text-sm text-slate-600">Book Image</label>
            <input type="file" value="{{$book->image}}" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" id="image" name="image">
        </div>

        <button type="submit" class="rounded-md bg-blue-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all focus:bg-blue-700 active:bg-blue-700 hover:bg-blue-700 disabled:pointer-events-none disabled:opacity-50">Update Book</button>
        <a href="{{route('books.index')}}" class=" mt-2 underline text-blue-400 block">back to view</a>
    </form>
</div>

</body>
</html>
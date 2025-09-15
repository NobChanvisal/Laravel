<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<div class=" max-w-3xl mx-auto m-10">
    <a href="{{route('books.create')}}" class="mb-5 inline-block rounded-md bg-blue-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all focus:bg-blue-700 active:bg-blue-700 hover:bg-blue-700 disabled:pointer-events-none disabled:opacity-50" >Add new book</a>
    <div class="relative flex flex-col w-full h-full text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">
        <table class="w-full text-left table-auto min-w-max">
            <thead>
            <tr class="border-b border-slate-300 bg-slate-50">
                <th class="p-4 text-sm font-normal leading-none text-slate-500">Product</th>
                <th class="p-4 text-sm font-normal leading-none text-slate-500">Name</th>
                <th class="p-4 text-sm font-normal leading-none text-slate-500">Price</th>
                <th class="p-4 text-sm font-normal leading-none text-slate-500">Stock</th>
                <th class="p-4 text-sm font-normal leading-none text-slate-500">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr class="hover:bg-slate-50">
                        <td class="p-4 border-b border-slate-200 py-5">
                            <img src="{{ asset($book->image) }}" alt="{{$book->name}}" class="w-16 object-cover rounded border border-black" />
                        </td>
                        <td class="p-4 border-b border-slate-200 py-5">
                            <p class="block font-semibold text-sm text-slate-800">{{$book->name}}</p>
                        </td>
                        <td class="p-4 border-b border-slate-200 py-5">
                            <p class="text-sm text-slate-500">${{$book->price}}</p>
                        </td>
                        <td class="p-4 border-b border-slate-200 py-5">
                            <p class="text-sm text-slate-500">{{$book->stock}}</p>
                        </td>
                        
                        <td class="p-4 border-b border-slate-200 py-5">
                            <div class="  flex justify-center space-x-2">
                                <a href="{{route('books.edit', $book->id)}}" class=" hover:opacity-70">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="blue"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h357l-80 80H200v560h560v-278l80-80v358q0 33-23.5 56.5T760-120H200Zm280-360ZM360-360v-170l367-367q12-12 27-18t30-6q16 0 30.5 6t26.5 18l56 57q11 12 17 26.5t6 29.5q0 15-5.5 29.5T897-728L530-360H360Zm481-424-56-56 56 56ZM440-440h56l232-232-28-28-29-28-231 231v57Zm260-260-29-28 29 28 28 28-28-28Z"/></svg>
                                </a>
                                <form action="" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class=" hover:opacity-70 border-none bg-transparent">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="red"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
                                    </button>
                                </form>
                            </div>
                            
                        </td>
                    </tr>
                @endforeach
            
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
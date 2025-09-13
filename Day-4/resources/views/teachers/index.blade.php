

@extends('layouts.app')

@section('title', 'Teacher')
@section('content')  
<h1 class=" text-center text-4xl my-2.5">Teacher lists</h1>
    
<div
  class="relative mx-auto p-2 flex flex-col max-w-2xl text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
   <table class="w-full text-left table-auto min-w-max ">
    <thead>
      <tr class=" border-b border-gray-200">
        <th class="p-4  bg-blue-gray-50">
          <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
            ID
          </p>
        </th>
        <th class="p-4  bg-blue-gray-50">
          <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
            Name
          </p>
        </th>
        <th class="p-4  bg-blue-gray-50">
          <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
            Action
          </p>
        </th>
      </tr>
      <tr class=" border-b border-gray-200">
        <td class=" text-center p-4 text-blue-400 hover:text-blue-300" colspan="3">
          <a class=" underline" href="{{route('teachers.create')}}">Add new teacher</a>
        </td>
      </tr>
    </thead>
  @foreach ($teachers as $tea)
    <tbody>
      
      
      <tr class=" border-b border-gray-200">
        <td class="p-4 border-blue-gray-50">
          <a href="{{ route('teachers.show', $tea->id) }}" class="block font-sans text-sm underline antialiased font-normal leading-normal text-blue-gray-900">
            {{$tea['id']}}
          </a>
        </td>
        <td class="p-4 border-blue-gray-50">
          <p class="block font-sans text-sm antialiased font-semibold leading-normal text-blue-gray-900">
            {{$tea['name']}}
          </p>
        </td>
        <td class="p-4 border-blue-gray-50 flex space-x-2">
          <a href="{{route('teachers.edit',$tea->id)}}" class="block font-sans text-sm antialiased font-medium leading-normal text-blue-500 hover:underline">
            Edit
          </a>
          <form action="{{ route('teachers.destroy', $tea->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="block font-sans text-sm antialiased font-medium leading-normal text-red-500 hover:underline" onclick="return confirm('Are you sure you want to delete this teacher?')">Delete</button>
            </form>
        </td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>
@endsection
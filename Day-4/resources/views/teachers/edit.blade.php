@extends('layouts.app')

@section('title', 'Edit Student')
@section('content') 

<div class="container max-w-80 mx-auto my-5">
    <h1 class=" mb-2 text-xl text-center font-semibold">Add new student</h1>
    <form class=" m-2 shadow bg-white p-4" action="{{route('teachers.update',$teacher->id)}}" method="POST">
        @csrf
        @method('PUT')
      <div class="w-full max-w-sm min-w-[200px]">
        <label class="block mb-2 text-sm text-slate-600">
          Name
        </label>
        <input name="name" value="{{$teacher->name}}" type="text" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Your Name" />
      </div>
    <button class="mt-3 cursor-pointer rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all" type="submit">Save</button>
    </form>
</div>

@endsection
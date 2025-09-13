@extends('layouts.app')

@section('title', 'View Teacher')

@section('content')
<div class="container max-w-80 mx-auto my-5">
    <h1 class="mb-2 text-xl text-center font-semibold">Teacher Details</h1>
    
    @if($teacher)
        <div class="m-2 shadow bg-white p-4 rounded-md">
            <div class="w-full max-w-sm min-w-[200px]">
                <label class="block mb-2 text-sm text-slate-600 font-semibold">Name</label>
                <p class="w-full bg-transparent text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2">{{ $teacher->name }}</p>
            </div>
            <div class="mt-4">
                <a href="{{ route('teachers.index') }}" class="cursor-pointer rounded-md bg-slate-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all hover:bg-slate-700">Back to Teachers</a>
                <a href="{{ route('teachers.edit', $teacher->id) }}" class="cursor-pointer rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all hover:bg-slate-900">Edit Teacher</a>
            </div>
        </div>
    @else
        <p class="text-red-500 text-center">Teacher not found.</p>
    @endif
</div>
@endsection
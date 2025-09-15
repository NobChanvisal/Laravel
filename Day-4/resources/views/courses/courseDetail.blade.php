@extends('layouts.app')
@section('title', 'Course details')
@section('content')  
    <table class=" border border-collapse text-left m-5">
    <tbody>
        <tr>
            <th class=" font-semibold border p-4">Name</th>
            <td class=" font-bold border p-4">{{$course->name}}</td>
        </tr>
        <tr>
            <th class=" font-semibold border p-4">Description</th>
            <td class=" border p-4">{{$course->description}}</td>
        </tr> 
        <tr>
            <th class=" font-semibold border p-4">Create Date</th>
            <td class=" border p-4">{{$course->created_at}}</td>
        </tr>
        <tr>
            <td colspan="2" class=" border p-4  text-center">
                <a class=" underline text-blue-500" href="{{route('courses.index')}}">Back to view</a>
            </td>
        </tr>
    </tbody>
</table>
@endsection
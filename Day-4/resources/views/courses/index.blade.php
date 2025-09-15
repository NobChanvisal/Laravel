@extends('layouts.app')
@section('content')
   <div class=" max-w-3xl mx-auto">
    <table class=" w-full p-2 text-left shadow m-5 bg-white border border-collapse border-gray-200">
        <thead>
            <tr>
                <th class=" p-4 border border-gray-200">ID</th>
                <th  class=" p-4 border border-gray-200">Name</th>
                <th  class=" p-4 border border-gray-200">Description</th>
                <th  class=" p-4 border border-gray-200">Action</th>
            </tr>
        </thead>
         
        <tbody>
            <tr>
                <td class=" p-4 border border-gray-200 text-center" colspan="4">
                    <a class=" text-blue-500 hover:underline" href="{{route('courses.create')}}">Insert New</a>
                </td>
            </tr>
             @foreach ($course as $item)
            <tr>
                <td  class=" p-4  border border-gray-200">
                    <a class="underline" href="{{route('courses.show', $item->id)}}">{{$item['id']}}</a>
                </td>
                <td class=" p-4 border border-gray-200">
                    {{$item['name']}}
                </td>
                <td class=" p-4 border border-gray-200">
                    {{$item['description']}}
                </td>
                <td class=" p-4 border border-gray-200 flex space-x-2">
                    <a class=" text-blue-400 block" href="{{route('courses.edit',$item['id'])}}">Edit</a>
                    <form action="{{route('courses.destroy',$item['id'])}}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button class=" text-red-400 block " onclick="return confirm('Are you sure you want to delete this course ?')" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
   </div>
@endsection
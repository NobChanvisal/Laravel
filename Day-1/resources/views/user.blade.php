
<x-layout>
    {{-- <div style=" padding: 20px;">
        <h1>Welcome back {{$thisUser['name']}}</h1>
        <p>{{$thisUser['email']}}</p>
    </div> --}}

    @foreach ($Users as $user)
    
        <p> 
            <a href="/user/{{ $user['id'] }}">
                {{ $user['name'] }} ({{ $user['role'] }})
            </a> 
        </p>
            
       
    @endforeach
</x-layout>
<x-layout>
    <x-slot:title>
        User details
    </x-slot:title>
    <div style=" padding: 20px;">
        <h1>Details of {{$user['name']}} </h1>
        <p>ID : {{$user['id']}}</p>
        <p>Role : {{$user['role']}}</p>

        <a href="/user">back to user list</a>
    </div>
</x-layout>
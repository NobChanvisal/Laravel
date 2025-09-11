
<x-layout>
    <x-slot:title>
        Userlist
    </x-slot:title>
   <div style="padding: 20px; display: flex; gap: 10px">
        @foreach ($Users as $user)
            <x-usercard :user="$user"/>
        @endforeach
   </div>

</x-layout>

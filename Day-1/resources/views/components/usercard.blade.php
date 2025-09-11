@props(['user'])

    <a style="text-decoration: none; color:black" href="/user/{{ $user['id'] }}">
        <img width="200" src="https://i.pinimg.com/736x/0f/68/94/0f6894e539589a50809e45833c8bb6c4.jpg" alt="">
        <p>{{ $user['name'] }} </p>
        <p>{{ $user['role'] }}</p>
    </a> 

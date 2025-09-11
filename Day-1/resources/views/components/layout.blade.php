
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #35495e;
            color: white;
            padding: 1.5rem 0;
            text-align: center;
        }
        nav a {
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
        }
        nav a:hover {
            background-color: #47617d;
            
        }
        nav a.active {
            background-color: #47617d;
        }
        main{
            padding: 10px;
        }
        footer{
            margin-top: 10px;
            text-align: center;
            
        }
    </style>
</head>
<body>
        <header>
            <nav>
                
                <a class="{{request()->is('/')? 'active':''}}" href="/">Home</a>
                {{-- <a href="">{{request()->is('/')}}</a> --}}
                <a class="{{request()->is('user*')? 'active':''}}" href="/user">User</a>
                <a class="{{request()->is('about')? 'active':''}}" href="/about">About</a>
                <a class="{{request()->is('contact')? 'active':''}}" href="/contact">Contact</a>
            </nav>
        </header>
        <main >
            <h1>{{$title}}</h1>
             {{ $slot }}
        </main>
        <footer>
            <h2>this is your foot</h2>
        </footer>
</body>
</html>

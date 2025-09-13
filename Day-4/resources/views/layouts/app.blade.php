    <!-- resources/views/layouts/app.blade.php -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My App - @yield('title')</title>
        <!-- Link to CSS, etc. -->
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body>
        

        <div class="container">
            @yield('content')
        </div>

       
    </body>
    </html>
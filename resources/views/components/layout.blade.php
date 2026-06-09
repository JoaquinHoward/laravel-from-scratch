@props([
    "title" => "laracasts"
])

<!DOCTYPE HTML>
<html>
    <head>
        <title>{{$title}}</title>
        <style>
            .max-w-400 {
                max-width: 400px;
                margin: auto;
            }
        </style>
    </head>
    <body>
        <nav>
            <a href = "/welcome">Home</a>
            <a href = "/about">About us</a>
            <a href = "/contact">Contact</a>
        </nav>

        <main>
            {{ $slot }}
        </main>
    </body>
</html>
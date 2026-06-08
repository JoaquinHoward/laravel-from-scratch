@props([
    "title" => "laracasts"
])

<!DOCTYPE HTML>
<html>
    <head>
        <title>{{$title}}</title>
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
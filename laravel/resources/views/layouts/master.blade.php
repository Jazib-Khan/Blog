<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http=equiv="X-UA-Compatible" content="ie=edge">
        <title>Blog</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    </head>

    <body>
        <section>
            <ul>
                <li>
                    <a href="{{url('/')}}">Homepage</a>
                </li>
            </ul>
        </section>

            @yield('content')

        </body>

        </html>


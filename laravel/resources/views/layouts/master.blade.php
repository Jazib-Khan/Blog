<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http=equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>

    <body>
        <section>
            <ul>
                <li>
                    <a href="{{url('/')}}">Homepage</a>
                    
                </li>
                <li>
                    <a href="{{url('/about-us')}}">About us</a>
                </li>
            </ul>
        </section>

            @yield('content')

        </body>

        </html>


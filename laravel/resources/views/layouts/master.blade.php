<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http=equiv="X-UA-Compatible" content="ie=edge">
        <title>Blog</title>
        <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css"  rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>

    <body>
        <div class="nav">
            <div class="container">
                <ul class="pull-left">
                    <li><img src= "{{asset('css/logo.png')}}" width= "100"></a></li>
                </ul>
                <ul class="pull-right">
                    <li><a href="{{url('/')}}">Homepage</a></li>
                </ul>
            </div>
        </div>
        
        <div class="jumbotron">
            <div class="container">
                <h1>Blog</h1>
                <p>Write your thoughts</p>
            </div>
        </div>

        <div class="Box">
            <div class="container">
                @yield('content')
                @yield('show')
                @yield('showBlog')
            </div>
        </div>
    </body>

</html>


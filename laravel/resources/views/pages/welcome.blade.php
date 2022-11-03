<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('css/test.css') }}">
    </head>
    <body>
        <h1 class="red">{{ $wp['title'] }}</h1>
        <p>{{ $wp['description'] }}</p>
        <p>{{ $wp['content'] }}</p>
    </body>
</html>

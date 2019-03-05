<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href={{ asset('public/css/app.css') }}>
        <title>{{ config('app.name', 'Another Laravel Blog') }}</title>
    </head>
    <body>
        @yield('content')
    </body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>
        @yield('title')
    </title>

</head>

<body>

    <div class="bg-gray-50 text-gray-900 ">
        <div>
            @include('layout.navbar')
        </div>
        <div>
            @yield('content')
        </div>
    </div>
</body>

</html>

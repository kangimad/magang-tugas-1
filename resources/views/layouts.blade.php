<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} - {{ $subtitle }}</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('mystyle.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body class="bg-gray-300">
    <div class="w-screen">
        <header>
            @include('partials.header')
        </header>
        <div class="pt-20 mx-auto">
            <section>
                @yield('content')
            </section>
        </div>
    </div>

</html>

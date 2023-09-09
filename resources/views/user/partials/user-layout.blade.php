<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $app }}</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="max-w-screen-4xl min-h-screen bg-gray-200 gap-x-3 flex">
        {{-- SIDEBAR --}}
        @include('user.partials.sidebar')
        {{-- END SIDEBAR --}}

        {{-- USER CONTENT --}}
        <div class="flex-col mr-5 w-10/12">
            {{-- HEADER --}}
            @include('user.partials.header')
            {{-- END HEADER --}}

            {{-- MAIN CONTENT --}}
            @yield('user-content')
            {{-- END MAIN CONTENT --}}
        </div>
        {{-- END USER CONTENT --}}

        <scrip src="{{ asset('script.js') }}" type="text/javascript" />
</body>

</html>

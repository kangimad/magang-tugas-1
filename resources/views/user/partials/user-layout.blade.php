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

        <div class="flex">
            <section>
                <div class=" flex flex-col border border-red-600 ml-48 max-w-7xl">
                    @include('user.partials.sidebar')
                </div>
            </section>

            <section>
                <div class="columns-8 flex flex-col">
                    <div class="flex border border-blue-600 mr-48">
                        @include('user.partials.header')
                    </div>
                    <div class="flex border border-yellow-600 mt-12 mr-48">
                    @yield('user-content')
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script>
        function dropdown() {
            let dropdown1 = document.getElementById("dropdown1")
            let dropdownMenu = document.getElementById("dropdown-menu")
            console.log(dropdownMenu.classList);
            if (dropdownMenu.classList.contains('hidden')) {
                console.log("on");
                dropdownMenu.classList.remove('hidden')
            }else {
                dropdownMenu.classList.add('hidden')
            }
        }
    </script>
</body>

</html>

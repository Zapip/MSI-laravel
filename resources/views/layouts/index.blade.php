<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    @vite('resources/css/app.css')
</head>

<body class="h-full flex flex-col bg-gradient-to-r from-blue-400 via-purple-500 to-pink-500 bg-opacity-50 backdrop-filter backdrop-blur-lg">
    <header>
        @include('partials.header')
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>

    @vite('resources/js/app.js')
    @yield('localJS')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>

</html>

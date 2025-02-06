<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app" class="d-flex">
        <!-- Sidebar -->
        <div class="bg-light border-end p-3" style="width: 250px; min-height: 100vh;">
            <h5>📌 منشوراتي</h5>
            <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{ route('posts.index') }}" class="text-decoration-none">posts</a>
                    </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-grow-1 p-4">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
            </nav>
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>

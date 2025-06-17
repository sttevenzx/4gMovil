<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Cellphone Sales')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
            <h1><a href="{{ url('/') }}">Cellphone Sales</a></h1>
            <nav>
                {{-- Navigation links can go here --}}
            </nav>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <p>&copy; {{ date('Y') }} Cellphone Sales</p>
        </footer>
    </div>
</body>
</html>

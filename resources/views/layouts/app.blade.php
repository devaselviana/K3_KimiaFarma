{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Kimia Farma - Dashboard')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen">
        @include('layouts.navigation')  <!-- Navbar Breeze tetap dipakai -->

        <!-- Page Content -->
        <main>
            @yield('content')  <!-- Ini yang bikin content dashboard muncul -->
        </main>
    </div>
</body>
</html>
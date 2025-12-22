<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        {{ isset($title) ? $title . ' - ' . config('app.name', 'Logopädie Praxis') : config('app.name', 'Logopädie Praxis') }}
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-900 font-sans">

    @include('components.appbar.appbar')+

<main class="max-w-5xl mx-auto px-4 py-12">

    @yield('content')

</main>

    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif
    
</body>
</html>

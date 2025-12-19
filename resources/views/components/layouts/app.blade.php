<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logopädie API | Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-900 font-sans">

    <x-header />

    <main class="max-w-5xl mx-auto px-4 py-12">

        <x-alerts.under-construction />

        {{ $slot }}

    </main>

    <x-footer />

</body>

</html>
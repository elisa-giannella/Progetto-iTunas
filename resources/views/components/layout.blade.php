<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? "iTunas" }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <x-navbar />

    {{ $slot }}
</body>
</html>
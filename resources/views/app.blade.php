<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Stalemate&display=swap" rel="stylesheet">
    @inertiaHead
</head>
<body>
<header class="pt-2 bg-gray-100 shadow-md border-b-gray-400">
    <a href="/" class="flex items-center gap-8 pl-10">
        <img src="/images/logo.png" class="shadow-gray-700 shadow-2xl rounded-full h-14 w-14 mb-2"/>
        <span class="font-[Stalemate] text-5xl font-bold text-red-700">
        Dagens Alyssa
    </span>
    </a>
</header>
@inertia
</body>
</html>

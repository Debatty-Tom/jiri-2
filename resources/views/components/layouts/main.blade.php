<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>
<body>
<a class="sr-only"
   href="#main-menu">Aller au menu principal</a>
<div class="flex flex-col-reverse gap-6">
    <main class="flex flex-col gap-4 px-4">
        {{ $slot }}
    </main>
    <div class="p-4 bg-blue-600">
        <x-navigations.main/>
    </div>
</body>
</html>

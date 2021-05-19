<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bar App</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<div style="height: 100vh; width: 100%; background-color: #F3F3EE;" id="app" class="md:hidden">
    <App></App>
</div>
<div class="hidden md:block">
    <p class="mt-8 bg-indigo-600 p-2 text-white rounded-md w-1/2 mx-auto block">Deze app is enkel beschikbaar op je smartphone.</p>
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

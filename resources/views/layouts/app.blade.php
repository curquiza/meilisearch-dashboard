<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="{{ mix('css/main.css') }}" rel="stylesheet" data-turbolinks-track="true">
    <script src="{{ mix('js/head.js') }}"></script>
    <livewire:styles/>
</head>
<body>
    @yield('content')
    <script src="{{ mix('js/app.js') }}"></script>
    <livewire:scripts/>
</body>
</html>

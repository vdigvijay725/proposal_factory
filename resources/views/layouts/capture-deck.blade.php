<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? 'ALQIMI Capture Deck' }}</title>

        @vite(['resources/css/capture-deck.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="app">
            {{ $slot }}
        </div>
    </body>
</html>

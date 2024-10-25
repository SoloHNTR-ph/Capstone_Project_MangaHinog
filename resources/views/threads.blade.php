<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MangaHinog</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    @extends('navbar')
    @section('navbar')
    <body>
        <section class="flex flex-col items-center justify-center pt-8 px-36">
            @if (count($threads)==0)
            <p>No Available Thread</p>
            @endif
            @foreach ($threads as $thread)
            <x-cardThread :thread="$thread" />
            @endforeach
        </section>
        @endsection
    </body>
</html>

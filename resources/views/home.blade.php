<x-app-layout>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    @vite('resources/css/app.css')
    <body>
    <section class="pt-24 md:mt-0 md:h-screen flex flex-col justify-center text-center md:text-left md:flex-row md:justify-between md:items-center lg:px-48 md:pary">
        <div style="padding-bottom: 500px;">
            <h1 class="font-pt-serif text-6xl  mb-7">Welkom bij SummaMove</h1>
        </div>
        <div style="padding-bottom: 500px;" class="flex flex-col justify-center items-center">
        
        <img class="image" src="{{ URL('images/summa2.png')}}" width="400px" height="250px">
        
    </section>

    </body>
</html>
</x-app-layout>

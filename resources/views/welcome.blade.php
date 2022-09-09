<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

         @livewireStyles
    </head>
    <body class="antialiased">
        <h1>welcome</h1>
        @php
        $post = ['name' =>"qasem" , 'family' => "bassaki"];
        @endphp
       <livewire:test.test-example :post="$post"/>
       @livewire('new-livewire')
        @livewireScripts
    </body>
</html>

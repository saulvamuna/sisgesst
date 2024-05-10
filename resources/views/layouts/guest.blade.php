<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>SISGESST</title>
        <link rel="icon" href="{{ asset('img/logo_ico.ico') }}" type="image/x-icon">


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css ">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
             #contentEval{
                overflow-y: scroll;
                scroll-margin: 20px;
            }
            #contentEval::-webkit-scrollbar{
                background: none;
                width: 10px;
                right: 10px;
            }
            #contentEval::-webkit-scrollbar-thumb {
                background: #50A44E;
                border-radius: 10px;
            }
            #contentEval::-webkit-scrollbar-track-piece{
                margin: 20px 0;
            }

            .navbar {
            background-color: #EEEFF1;
            transition: background-color 0.4s;
            }
            .navbar a:hover {
            top: 0;
            color: white;
            background-color: #0000005e;
            transition: background-color 0.4s;
            }

            .navbar.scrolled {
            background-color: #00000064;
            color: white;
            }
        </style>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

    </body>
</html>

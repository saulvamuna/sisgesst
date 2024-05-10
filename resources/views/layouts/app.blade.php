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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css ">

    </head>
     <body> {{-- class="font-sans antialiased bg-container bg-cover bg-no-repeat bg-fixed" --}}
        <x-banner />
        <div class="min-h-screen">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        <script>
            livewire.on('alert', function(message){
                Swal.fire(
                    '¡Se ha guardado la información correctamente!',
                    message,
                    'success')
            })
            livewire.on('alertResgisterRol', function(message){
                Swal.fire(
                    'La información y el rol se han guardado de manera correcta.',
                    message,
                    'success')
            })
            livewire.on('alertEdit', function(message){
                Swal.fire(
                    'La información ha sido editada de manera adecuada.',
                    message,
                    'success')
            })
            livewire.on('alertDelete', function(message){
                Swal.fire(
                    'La información ha sido eliminada de forma apropiada.',
                    message,
                    'success')
            })
        </script>
    </body>
</html>

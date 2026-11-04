<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
         @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    
    </head>
    <body>
           

<div class="min-h-screen flex items-center justify-center">
    <div class="bg-neutral-primary-soft block max-w-sm p-6 border border-default rounded-base shadow-xs">
            @foreach($cards->Producto as $p)
                <h3 class="mt-6 mb-2 text-2xl font-semibold tracking-tight text-heading text-center">nombre</h3>
                <p class="text-center">{{$p->nombre}}</p>

                <h3 class="mt-6 mb-2 text-2xl font-semibold tracking-tight text-heading text-center">descripcion</h3>
                <p class="text-center">{{$p->descripcion}}</p>

                <h3 class="mt-6 mb-2 text-2xl font-semibold tracking-tight text-heading text-center">imagen</h3>
                <p class="text-center">{{$p->imagen}}</p>
        @endforeach
        <a href="{{ route('reserva.index') }}">
          <button type="button" class="relative right-3 text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">
            Volver a las reservas
          </button>
        </a>
    </div>
</div>



    </body>
</html>
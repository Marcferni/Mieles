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
           

<div class="relative overflow-x-auto bg-neutral-50 shadow-sm rounded-lg border border-red-100">
    <table class="w-full text-sm text-left rtl:text-right text-neutral-600">
        <thead class="bg-neutral-100 border-b border-neutral-200">
            <tr>
                <th scope="col" class="px-6 py-3 font-medium text-neutral-700">
                    Cliente
                </th>
                <th scope="col" class="px-6 py-3 font-medium text-neutral-700">
                    Direccion
                </th>
                <th scope="col" class="px-6 py-3 font-medium text-neutral-700">
                    Fecha
                </th>
                 <th scope="col" class="px-6 py-3 font-medium text-neutral-700">
                    acciones
                </th>
                   <a href="{{ route('reserva.create') }}">
                    <button type="button"
                    class="relative right-3 text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                        Ver factura
                    </button>
                 </a>
            </tr>
        </thead>
        <tbody>
            @foreach($reservas as $r)
            <tr class="odd:bg-white even:bg-neutral-50 border-b border-neutral-200">
                <th scope="row" class="px-6 py-4 font-medium text-neutral-900 whitespace-nowrap">
                   {{$r->user->name}}
                </th>
                <td class="px-6 py-4">
                    {{$r->direccion}}
                </td>
                <td class="px-6 py-4">
                    {{$r->fecha}}
                </td>
                <td class="px-6 py-4">
                 <a href="{{ route('reserva.show',$r->id) }}">
                    <button type="button"
                    class="relative right-3 text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                        Ver detalles de factura
                    </button>
                 </a>
                 <a>
                 <form method="POST" action="{{ route('reserva.destroy', $r->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                    class="relative right-3 text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                      cancelar reserva
                    </button>         
                 </form>
                 </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    </body>
</html>

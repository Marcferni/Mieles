<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-head>
    </x-head>
    <body>   
        <x-navbar></x-navbar>  
        {{ $slot }}
    </body>
    <x-footer>
    </x-footer>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-head>
    </x-head>
    <body>   
        {{ $slot }}
    </body>
    <x-footer>
    </x-footer>
</html>
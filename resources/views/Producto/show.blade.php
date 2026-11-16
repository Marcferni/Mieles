<x-page>
    @foreach ($objeto as $producto)
        <p>{{ $producto->nombre }}</p>
    @endforeach
    <a href="{{ route('producto.edit', $producto->id) }}">
        <button type="button" class="relative right-3 text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">
            Actualizar
        </button>
    </a>
    <form class="max-w-md mx-auto" method="POST" action="{{ route('producto.destroy', $producto->id ) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="relative right-3 text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">Borrar</button>
    </form>
</x-page>

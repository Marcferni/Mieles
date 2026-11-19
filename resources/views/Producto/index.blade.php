<x-page>
    @foreach ($lista as $producto)
        <p>{{ $producto->nombre }}</p>
        <img src="{{ asset('storage/' . $producto->imagen) }}" alt="{{ $producto->nombre }}" width="150">
        <a href="{{ route('producto.show', $producto->id) }}">
            <button type="button" class="relative right-3 text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                Ver detalles
            </button>
        </a>
    @endforeach
    <a href="{{ route('producto.create') }}">
        <button type="button" class="relative right-3 text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">
            Crear
        </button>
    </a>
</x-page>
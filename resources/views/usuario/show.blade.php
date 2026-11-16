<x-page> 
    <div class="min-h-screen flex items-center justify-center">
            <div class="bg-neutral-primary-soft block max-w-sm p-6 border border-default rounded-base shadow-xs">
                @foreach($usuario as $u)
                    <h3 class="mt-6 mb-2 text-2xl font-semibold tracking-tight text-heading text-center">nombre</h3>
                    <p class="text-center">{{$u->name}}</p>

                    <h3 class="mt-6 mb-2 text-2xl font-semibold tracking-tight text-heading text-center">email</h3>
                    <p class="text-center">{{$u->email}}</p>
                @endforeach
                <a href="{{ route('usuario.index') }}">
                <button type="button" class="relative right-3 text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                    Lista de usuarios
                </button>
                </a>
            </div>
        </div>
</x-page>
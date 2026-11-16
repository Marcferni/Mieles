<x-page>
    <div class="relative overflow-x-auto bg-neutral-50 shadow-sm rounded-lg border border-red-100">
            <table class="w-full text-sm text-left rtl:text-right text-neutral-600">
                <thead class="bg-neutral-100 border-b border-neutral-200">
                    <tr>
                        <th scope="col" class="px-6 py-3 font-medium text-neutral-700">
                            Usuario
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium text-neutral-700">
                            Correo electrónico
                        </th>
                        <a href="{{ route('usuario.create') }}">
                            <button type="button"
                            class="relative right-3 text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                                Crear Usuario
                            </button>
                        </a>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $u)
                    <tr class="odd:bg-white even:bg-neutral-50 border-b border-neutral-200">
                        <th scope="row" class="px-6 py-4 font-medium text-neutral-900 whitespace-nowrap">
                            {{$u->name}}
                        </th>
                        <td class="px-6 py-4">
                            {{$u->email}}
                        </td>
                        <td class="px-6 py-4">
                        <a href="{{ route('usuario.show',$u->id) }}">
                            <button type="button"
                            class="relative right-3 text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                                Ver detalles del usuario
                            </button>
                        </a>
                        <a>
                        <form method="POST" action="{{ route('usuario.destroy', $u->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                            class="relative right-3 text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                            eliminar usuario
                            </button>         
                        </form>
                        </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</x-page>

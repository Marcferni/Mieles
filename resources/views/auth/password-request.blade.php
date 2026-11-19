<x-page>
    <form method="POST" action="{{ route('password.email') }}" class="max-w-md mx-auto">
        @csrf

        <h3>¿Olvidaste la contraseña?</h3>
        <p>Introduce tu dirección para mandarte una nueva contraseña</p>

        <!-- Email Address -->
        <div class="mb-5">
            <label for="email">Email</label>

            <input id="email" type="email" name="email" class="block mb-2.5 text-sm font-medium text-heading" value="{{old('email')}}" required />
        </div>
        
        <button type="submit" class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
            Crear nueva contraseña
        </button>
    </form>
            
    <div class="mb-5">
        <p>¿Ya te acuerdas?</p>
        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
            Iniciar sesión
        </a>
    </div>
</x-page>

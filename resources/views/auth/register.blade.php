<x-page>
        <form method="POST" action="{{ route('register') }}" class="max-w-md mx-auto">
            @csrf

            <!-- Name -->
           <div class="mb-5 mt-16">
                <label for="name">Nombre</label>

                <input id="name" type="text" name="name" class="block mb-2.5 text-sm font-medium text-heading" value="{{old('name')}}" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mb-5">
                <label for="email">Email</label>

                <input id="email" type="email" name="email" class="block mb-2.5 text-sm font-medium text-heading" value="{{old('email')}}" required />
            </div>

           
            <!-- Password -->
            <div class="mb-5">
                <label for="password">Contraseña</label>

                <input id="password" class="block mb-2.5 text-sm font-medium text-heading"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>


            <!-- Confirm Password -->
            <div class="mb-5">
                <label for="password_confirmation">Confirmar Contraseña</label>

                <input id="password_confirmation" class="block mb-2.5 text-sm font-medium text-heading"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="mb-5">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    tienes ya una cuenta?
                </a>
                <button type="submit" class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Registar Usuario</button>
            </div>
        </form>
</x-page>
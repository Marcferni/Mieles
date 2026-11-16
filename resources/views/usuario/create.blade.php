<x-page>
  <form method="POST" action="{{ route('usuario.store') }}" class="max-w-md mx-auto">
    @csrf
    <div class="mb-5">
      <label for="name" class="block mb-2.5 text-sm font-medium text-heading">Nombre del usuario</label>
      <input type="text" id="name" name="name" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" required />
    </div>
    <div class="mb-5">
      <label for="email" class="block mb-2.5 text-sm font-medium text-heading">Direccion de correo electronico del usuario</label>
      <input type="email" id="email" name="email" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" required />
    </div>
    <div class="mb-5">
      <label for="password" class="block mb-2.5 text-sm font-medium text-heading">Contraseña</label>
      <input type="password" id="password" name="password" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" required />
    </div>
    <button type="submit" class="text-black bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Crear Usuario</button>
  </form>
</x-page>
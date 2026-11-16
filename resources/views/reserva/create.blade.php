<x-page>
  <form method="POST" action="{{ route('reserva.store') }}" class="max-w-md mx-auto">
    @csrf
    <div class="mb-5">
      <label for="fecha" class="block mb-2.5 text-sm font-medium text-heading">Fecha de la reserva</label>
      <input type="date" id="fecha" name="fecha" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" required />
    </div>
    <div class="mb-5">
      <label for="direccion" class="block mb-2.5 text-sm font-medium text-heading">Direccion donde entregar la reserva</label>
      <input type="text" id="direccion" name="direccion" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" required />
    </div>
    <button type="submit" class="text-black bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Realizar Reserva</button>
  </form>
</x-page>
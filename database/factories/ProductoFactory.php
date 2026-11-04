<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //Producto::factory(numero de registros que quieras)->create()
            $profactory = new Producto(),
            $profactory->nombre =  $this->faker()->name(),
            $profactory->descripcion = $this->faker()->name(),
            $profactory->imagen = $this->faker()->name(),
        ];
    }
}

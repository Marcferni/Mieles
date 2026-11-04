<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use app\models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $prodeed = new Producto();
        $prodeed->nombre = "Miel";
        $prodeed->descripcion = "Articulo de consumo de caracter apicola 100% natural";
        $prodeed->imagen = "-";
        save();
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarCategorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(array(
            [
                'nombre' => 'Abarrotes',
                'descripcion' => 'Productos comestibles y golosinas'
            ],
            [
                'nombre' => 'Aseo',
                'descripcion' => 'Productos de limpieza y aseo'
            ],
            [
                'nombre' => 'Bebestibles',
                'descripcion' => 'Productos liquidos'
            ],
            [
                'nombre' => 'Hogar',
                'descripcion' => 'Productos electronicos, menaje, linea blanca'
            ],
            [
                'nombre' => 'Vestuario',
                'descripcion' => 'Productos para vestir y calzado'
            ],
        ));
    }
}

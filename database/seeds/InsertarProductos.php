<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(array(
            [
                'codigo' => 'ARR9631',
                'nombre' => 'Arroz G2 Tucapel',
                'categoria_id' => 1,
                'sucursal_id' => 2,
                'descripcion' => 'Grano largo 1 kg',
                'cantidad' => 20,
                'precio' => 2450,
                'estado' => true,
            ],
            [
                'codigo' => 'FID3298',
                'nombre' => 'Fideos Espiral Carozzi',
                'categoria_id' => 1,
                'sucursal_id' => 1,
                'descripcion' => 'Envase 400gr',
                'cantidad' => 40,
                'precio' => 1120,
                'estado' => true,
            ],
            [
                'codigo' => 'DET9543',
                'nombre' => 'Detergente liq OMO',
                'categoria_id' => 2,
                'sucursal_id' => 3,
                'descripcion' => 'Envase 3 litros concentrado',
                'cantidad' => 45,
                'precio' => 9580,
                'estado' => true,
            ],
            [
                'codigo' => 'JAB3210',
                'nombre' => 'Jabon Liquido Simonds',
                'categoria_id' => 2,
                'sucursal_id' => 4,
                'descripcion' => 'Envase 500ml',
                'cantidad' => 37,
                'precio' => 1980,
                'estado' => true,
            ],
            [
                'codigo' => 'VEM2345',
                'nombre' => 'Polera m/corta blanca',
                'categoria_id' => 5,
                'sucursal_id' => 4,
                'descripcion' => 'Sin estampado algodon',
                'cantidad' => 60,
                'precio' => 5670,
                'estado' => true,
            ],
            [
                'codigo' => 'COC4560',
                'nombre' => 'Horno Electrico 35 lts',
                'categoria_id' => 4,
                'sucursal_id' => 5,
                'descripcion' => 'Somela 2000W bandeja',
                'cantidad' => 15,
                'precio' => 46800,
                'estado' => true,
            ],
            [
                'codigo' => 'BAN9540',
                'nombre' => 'Set Toallas algodon',
                'categoria_id' => 4,
                'sucursal_id' => 5,
                'descripcion' => 'Estampadas 3 unidades',
                'cantidad' => 32,
                'precio' => 11300,
                'estado' => true,
            ],
            [
                'codigo' => 'SNA3567',
                'nombre' => 'Papa Frita Grande Americana',
                'categoria_id' => 1,
                'sucursal_id' => 1,
                'descripcion' => 'Everscrip corte americano 240gr',
                'cantidad' => 80,
                'precio' => 2500,
                'estado' => true,
            ],
            [
                'codigo' => 'VIN2098',
                'nombre' => 'Vino tinto Merlot',
                'categoria_id' => 1,
                'sucursal_id' => 5,
                'descripcion' => 'Botella 750cc Santa Rita',
                'cantidad' => 60,
                'precio' => 4350,
                'estado' => true,
            ],
            [
                'codigo' => 'VAC3057',
                'nombre' => 'Abastero importado',
                'categoria_id' => 1,
                'sucursal_id' => 3,
                'descripcion' => 'Vacio 1kg paraguay',
                'cantidad' => 32,
                'precio' => 8750,
                'estado' => true,
            ],
            [
                'codigo' => 'BEB3022',
                'nombre' => 'Coca Cola 2 Lts',
                'categoria_id' => 1,
                'sucursal_id' => 3,
                'descripcion' => 'Botella desechable normal',
                'cantidad' => 94,
                'precio' => 1780,
                'estado' => true,
            ],


         ));
    }
}

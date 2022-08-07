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
                'descripcion' => 'Grano largo 1 kg',
            ],
            [
                'codigo' => 'FID3298',
                'nombre' => 'Fideos Espiral Carozzi',
                'categoria_id' => 1,
                'descripcion' => 'Envase 400gr',
            ],
            [
                'codigo' => 'DET9543',
                'nombre' => 'Detergente liq OMO',
                'categoria_id' => 2,
                'descripcion' => 'Envase 3 litros concentrado',
            ],
            [
                'codigo' => 'JAB3210',
                'nombre' => 'Jabon Liquido Simonds',
                'categoria_id' => 2,
                'descripcion' => 'Envase 500ml',
            ],
            [
                'codigo' => 'VEM2345',
                'nombre' => 'Polera m/corta blanca',
                'categoria_id' => 5,
                'descripcion' => 'Sin estampado algodon',
            ],
            [
                'codigo' => 'COC4560',
                'nombre' => 'Horno Electrico 35 lts',
                'categoria_id' => 4,
                'descripcion' => 'Somela 2000W bandeja',
            ],
            [
                'codigo' => 'BAN9540',
                'nombre' => 'Set Toallas algodon',
                'categoria_id' => 4,
                'descripcion' => 'Estampadas 3 unidades',
            ],
            [
                'codigo' => 'SNA3567',
                'nombre' => 'Papa Frita Grande Americana',
                'categoria_id' => 1,
                'descripcion' => 'Everscrip corte americano 240gr',
            ],
            [
                'codigo' => 'VIN2098',
                'nombre' => 'Vino tinto Merlot',
                'categoria_id' => 1,
                'descripcion' => 'Botella 750cc Santa Rita',
            ],
            [
                'codigo' => 'VAC3057',
                'nombre' => 'Abastero importado',
                'categoria_id' => 1,
                'descripcion' => 'Vacio 1kg paraguay',
            ],
            [
                'codigo' => 'BEB3022',
                'nombre' => 'Coca Cola 2 Lts',
                'categoria_id' => 1,
                'descripcion' => 'Botella desechable normal',
            ],


         ));
    }
}

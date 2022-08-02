<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarSucursales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursals')->insert(array(
            [
                'nombre' => 'Rancagua',
                'direccion' => 'Av Central 2309',
                'comuna' => 'Rancagua',
                'ciudad' => 'Rancagua',
                'telefono' => '352563421',
            ],
            [
                'nombre' => 'Poniente',
                'direccion' => 'Av Pajaritos 3451',
                'comuna' => 'Maipu',
                'ciudad' => 'Santiago',
                'telefono' => '235674318',
            ],
            [
                'nombre' => 'Norte',
                'direccion' => 'Arturo Pratt 85300',
                'comuna' => 'Huechuraba',
                'ciudad' => 'Santiago',
                'telefono' => '224775610',
            ],
            [
                'nombre' => 'Costa',
                'direccion' => '5 Norte 2098',
                'comuna' => 'Viña del Mar',
                'ciudad' => 'Viña del Mar',
                'telefono' => '352456120',
            ],
            [
                'nombre' => 'Araucania',
                'direccion' => 'Av Principal 4302',
                'comuna' => 'Temuco',
                'ciudad' => 'Temuco',
                'telefono' => '641231435',
            ],
            [
                'nombre' => 'Elqui',
                'direccion' => 'Av 18 de Septiembre 975',
                'comuna' => 'La Serena',
                'ciudad' => 'La Serena',
                'telefono' => '632145600',
            ],
        ));
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert(array(
            [
                'nombre' => 'Ricardo',
                'apellido' => 'Gonzalez',
                'password' => '12345',
                'email' => 'rgonzalez@gmail.com',
            ],
            [
                'nombre' => 'Julio',
                'apellido' => 'Martinez',
                'password' => '12345',
                'email' => 'jmartinez@gmail.com',
            ],
            [
                'nombre' => 'Roberto',
                'apellido' => 'Arriagada',
                'password' => '12345',
                'email' => 'rarriagada@gmail.com',
            ],
        ));
    }
}

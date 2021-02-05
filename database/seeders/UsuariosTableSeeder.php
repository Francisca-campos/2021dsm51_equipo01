<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            ['id' => 'usu1', 'nombre' => 'Juan', 'primer_apellido' => 'Mendez', 'direccion' => 'Calle zaragoza', 'telefono' => '729359869', 'correo_electronico' => 'juan@gmail.com', 'password' => 'juan123']
            , ['id' => 'usu2', 'nombre' => 'Monica', 'primer_apellido' => 'Torres', 'direccion' => 'Calle flores', 'telefono' => '729359868', 'correo_electronico' => 'monica@gmail.com', 'password' => 'monica123']
            , ['id' => 'usu3', 'nombre' => 'Luis', 'primer_apellido' => 'Sanchez', 'direccion' => 'Calle dalia', 'telefono' => '729359862', 'correo_electronico' => 'luis@gmail.com', 'password' => 'luis123']
        ]);
    }
}

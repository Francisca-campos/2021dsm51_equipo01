<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TiposServiciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tiposervicios')->insert([
            ['id' => 'tipo1', 'nombre' => 'impresion', 'precio' => '105.3', 'material_base' => 'papelbond']
            , ['id' => 'tipo2', 'nombre' => 'serigrafia','precio' => '509.3', 'material_base' => 'cartuchos' ]
            , ['id' => 'tipo3', 'nombre' => 'rotulacion', 'precio' => '450.2', 'material_base' => 'hoja' ]
        ]);
    }
}

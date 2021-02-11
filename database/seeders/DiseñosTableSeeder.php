<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Diseño;


class DiseñosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $now = Carbon::now('America/Mexico_City')->format('Y-m-d H:i:s');
            Diseño::insert([
            'nombre' => 'Diseño1'
            , 'color' => 'Rojo'
            , 'archivo' => 'no disponible'
            , 'estatus' => 'Activo'
            , 'created_at' => $now
            , 'updated_at' => $now
            
        ]);
    }
}

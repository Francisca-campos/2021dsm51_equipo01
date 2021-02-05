<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DiseñosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diseños')->insert([
            ['id' => 'diseño1', 'color' => 'azul', 'archivo' => 'pdf']
            , ['id' => 'diseño2', 'color' => 'rosa','archivo' => 'word' ]
            
        ]);
    }
}

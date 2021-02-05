<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MaterialesBaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materialesbase')->insert([
            ['id' => 'mate1', 'nombre' => 'papelbond', 'precio' => '105.9']
            , ['id' => 'mate2', 'nombre' => 'tinta','precio' => '205.9' ]
            
        ]);
    }
}

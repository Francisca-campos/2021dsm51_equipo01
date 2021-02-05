<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class ServiciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicios')->insert([
            ['id' => 'ser1', 'cantidad' => '3']
            , ['id' => 'ser2', 'cantidad' => '5']
            , ['id' => 'ser3', 'cantidad' => '2']
        ]);
    }
}

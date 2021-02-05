<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarritosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carritos')->insert([
            ['id' => 'car1', 'cantidad' => '3', 'total' => '220.8', 'metodo_pago' => 'efectivo']
            , ['id' => 'car2', 'cantidad' => '5', 'total' => '560.6', 'metodo_pago' => 'tarjeta']
            , ['id' => 'car3', 'cantidad' => '2', 'total' => '565.1', 'metodo_pago' => 'tarjeta']
        ]);
    }
}

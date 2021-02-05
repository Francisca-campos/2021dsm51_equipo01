<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsuariosTableSeeder::class);
        $this->call(CarritosTableSeeder::class);
        $this->call(serviciosTableSeeder::class);
        $this->call(TiposServiciosTableSeeder::class);
        $this->call(DiseñosTableSeeder::class);
        $this->call(MaterialesBaseTableSeeder::class);
    }
}

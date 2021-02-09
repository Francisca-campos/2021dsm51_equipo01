<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now('America/Mexico_City')->format('Y-m-d H:i:s');
        User::insert([
        'name' => 'Administrador'
        , 'primer_apellido' => 'Dsm'
        , 'segundo_apellido' => 'Dmm'
        , 'sexo' => 'Masculino'
        , 'fecha_nacimiento' => '2020-01-01'
        , 'estatus' => 'Activo'
        , 'perfil' => 'Administrador'
        , 'email' => 'administrador@correo.com'
        , 'password' => bcrypt('12345678')
        , 'created_at' => $now
        , 'updated_at' => $now
        ]);
        User::insert([
        'name' => 'Cliente'
        , 'primer_apellido' => 'Dsm'
        , 'segundo_apellido' => 'Dmm'
        , 'sexo' => 'Masculino'
        , 'fecha_nacimiento' => '2020-02-02'
        , 'estatus' => 'Activo'
        , 'perfil' => 'Cliente'
        , 'email' => 'cliente@correo.com'
        , 'password' => bcrypt('12345678')
        , 'created_at' => $now
        , 'updated_at' => $now
        ]);
        User::insert([
        'name' => 'Cliente1'
        , 'primer_apellido' => 'Dsm'
        , 'segundo_apellido' => 'Dmm'
        , 'sexo' => 'Masculino'
        , 'fecha_nacimiento' => '2020-03-03'
        , 'estatus' => 'Activo'
        , 'perfil' => 'Cliente1'
        , 'email' => 'cliente1@correo.com'
        , 'password' => bcrypt('12345678')
        , 'created_at' => $now
        , 'updated_at' => $now
        ]);
    }
}

 

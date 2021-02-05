<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->char('id', 3)->comment('ID');
            $table->string('nombre', 50)->comment('Nombre');
            $table->string('primer_apellido', 50)->comment('Primer_apellido');
            $table->string('direccion', 50)->comment('Direccion');
            $table->integer('telefono', 50)->comment('Telefono');
            $table->string('correo_electronico', 50)->comment('Correo_electronico');
            $table->string('password', 10)->comment('Password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}

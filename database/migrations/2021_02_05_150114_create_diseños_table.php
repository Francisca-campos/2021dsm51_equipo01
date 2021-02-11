<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateDiseñosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diseños', function (Blueprint $table) {
            $table->id()->comment('ID');
            $table->string('nombre', 25)->comment('Nombre');
            $table->enum('color', ['Verde', 'Rojo', 'Azul', 'Rosa', 'Morado', 'Gris', 'Negro', 'Cafe', 'Amarillo', 'Naranja'])->comment('Color');
            $table->string('archivo', 255)->comment('Archivo');
            $table->enum('estatus', ['Activo', 'Inactivo'])->comment('Estatus');
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
        Schema::dropIfExists('diseños');
    }
}

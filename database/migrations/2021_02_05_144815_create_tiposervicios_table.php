<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposerviciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiposervicios', function (Blueprint $table) {
            $table->char('id', 3)->comment('ID');
            $table->string('nombre', 45)->comment('Nombre');
            $table->decimal('precio', 45)->comment('Precio');
            $table->string('material_base', 45)->comment('Material_base');
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiposervicios');
    }
}

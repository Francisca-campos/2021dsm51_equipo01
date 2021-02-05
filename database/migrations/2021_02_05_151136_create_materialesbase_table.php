<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialesbaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materialesbase', function (Blueprint $table) {
            $table->char('id', 3)->comment('ID');
            $table->string('nombre', 45)->comment('Nombre');
            $table->decimal('precio', 45)->comment('Precio');
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
        Schema::dropIfExists('materialesbase');
    }
}

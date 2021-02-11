<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carritos', function (Blueprint $table) {
            $table->id()->comment('ID');
            $table->integer('cantidad', 25)->comment('Cantidad');
            $table->decimal('total', 25)->comment('Total');
            $table->string('segundo_apellido', 25)->nullable()->comment('Segundo apellido');
            $table->enum('sexo', ['Femenino', 'Masculino', 'Prefiere no decirlo'])->comment('Sexo');
            $table->rememberToken();
            $table->timestamps();
            });
        Schema::create('carritos', function (Blueprint $table) {
            $table->string('id', 5)->comment('ID');
            $table->integer('cantidad', 45)->comment('Cantidad');
            $table->decimal('total', 50)->comment('Total');
            $table->string('metodo_pago', 50)->comment('Metodo_pago');
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
        Schema::dropIfExists('carritos');
    }
}

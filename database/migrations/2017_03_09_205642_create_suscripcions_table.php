<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuscripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscripciones', function (Blueprint $table) {
            $table->increments('id_suscripcion');
            $table->integer('id_lector')->unsigned();;
            $table->integer('id_libro')->unsigned();;
            $table->timestamps();
          


             $table->foreign('id_lector')
                ->references('id_usuario')
                ->on('usuarios');

            $table->foreign('id_libro')
            ->references('id_libro')
            ->on('libros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suscripcions');
    }
}

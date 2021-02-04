<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();
            $table->string('num_caracterizacion');
            $table->unsignedTinyInteger('estado');
            $table->bigInteger('jornada_id')->unsigned();
            $table->bigInteger('programa_formacion_id')->unsigned();
            $table->foreign('jornada_id')->references('id')->on('jornadas');
            $table->foreign('programa_formacion_id')->references('id')->on('programa_formaciones');
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
        Schema::dropIfExists('fichas');
    }
}

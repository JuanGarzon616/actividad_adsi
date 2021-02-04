<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAprendicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprendices', function (Blueprint $table) {
            $table->id();
            $table->string('documento',30);
            $table->string('nombres',50);
            $table->string('apellidos',50);
            $table->string('mail',50);
            $table->date('fecha_nacimiento');
            $table->string('genero',1);
            $table->string('tipo_doc',3);
            $table->bigInteger('ficha_id')->unsigned();
            $table->foreign('ficha_id')->references('id')->on('fichas');
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
        Schema::dropIfExists('aprendices');
    }
}

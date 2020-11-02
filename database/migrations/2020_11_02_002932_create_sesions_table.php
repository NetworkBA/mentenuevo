<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSesionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sesions', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha', 0);
            $table->string('tema');        
            $table->string('recursos');
            $table->string('observacion');
            $table->string('resumen');
            $table->foreignId('id_especialista')->nullable();   
            $table->foreign('id_especialista')->references('id')->on('users');
            $table->foreignId('id_paciente')->nullable();   
            $table->foreign('id_paciente')->references('id')->on('users');
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
        Schema::dropIfExists('sesions');
    }
}

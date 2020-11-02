<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramaIntervencionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programa_intervencions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_paciente')->nullable();   
            $table->foreign('id_paciente')->references('id')->on('users');
            $table->foreignId('id_psicologo')->nullable();   
            $table->foreign('id_psicologo')->references('id')->on('users');
            $table->string('expediente');            
            $table->timestamp('fecha', 0);
            $table->string('duracion');
            $table->timestamp('fecha_siguiente_cita', 0)->nullable();
            $table->string('variables_historicas');            
            $table->string('objetivos_aprendizaje');
            $table->string('metodos_tecnicas_evaluacion');
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
        Schema::dropIfExists('programa_intervencions');
    }
}

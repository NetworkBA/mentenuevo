<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familiars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_programa')->nullable();   
            $table->foreign('id_programa')->references('id')->on('programa_intervencions');
            $table->string('nombre');
            $table->string('parentesco');
            $table->string('edad');
            $table->string('ocupacion');                
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
        Schema::dropIfExists('familiars');
    }
}

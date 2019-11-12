<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaAudio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Audio', function (Blueprint $table) {
            $table->bigIncrements('idAudio_frag');

            $table->integer('idAudio_comp');
            $table->binary('arquivo');

            /*$table->integer('idDenuncia')->unsigned();
            $table->foreign('idDenuncia')->references('id')->on('Denuncia');*/
            
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
        Schema::dropIfExists('Audio');
    }
}

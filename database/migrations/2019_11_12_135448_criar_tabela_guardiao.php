<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaGuardiao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Guardiao', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nome', 200);

            /*$table->integer('idUsuaria')->unsigned();
            $table->foreign('idUsuaria')->references('id')->on('Usuaria');
            $table->integer('idContato')->unsigned();
            $table->foreign('idContato')->references('id')->on('Contato');
            $table->integer('idDenuncia')->unsigned();
            $table->foreign('idDenuncia')->references('id')->on('Denuncia');
            $table->integer('idLogDen')->unsigned();
            $table->foreign('idLogDen')->references('idLogin')->on('Denuncia');*/
            

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
        Schema::dropIfExists('Guardiao');
    }
}

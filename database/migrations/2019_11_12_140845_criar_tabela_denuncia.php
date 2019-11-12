<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaDenuncia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Denuncia', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('tipo_violencia');

            /*$table->integer('idLocal')->unsigned();
            $table->foreign('idLocal')->references('id')->on('Localizacao');
            $table->integer('idPeriodo')->unsigned();
            $table->foreign('idPeriodo')->references('id')->on('Periodo');
            $table->integer('idLogin')->unsigned();
            $table->foreign('idLogin')->references('id')->on('users');*/

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
        Schema::dropIfExists('Denuncia');
    }
}

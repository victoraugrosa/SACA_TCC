<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignTableDenuncia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Denuncia', function (Blueprint $table) {
            $table->bigInteger('idLocal')->unsigned();
            $table->foreign('idLocal')->references('id')->on('Localizacao');
            $table->bigInteger('idPeriodo')->unsigned();
            $table->foreign('idPeriodo')->references('id')->on('Periodo');
            $table->bigInteger('idLogin')->unsigned();
            $table->foreign('idLogin')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Denuncia', function (Blueprint $table) {
            //
        });
    }
}

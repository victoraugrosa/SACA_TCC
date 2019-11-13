<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignTableGuardiao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Guardiao', function (Blueprint $table) {
            $table->bigInteger('idUsuaria')->unsigned();
            $table->foreign('idUsuaria')->references('id')->on('Usuaria');
            $table->bigInteger('idContato')->unsigned();
            $table->foreign('idContato')->references('id')->on('Contato');
            $table->bigInteger('idDenuncia')->unsigned();
            $table->foreign('idDenuncia')->references('id')->on('Denuncia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Guardiao', function (Blueprint $table) {
            //
        });
    }
}

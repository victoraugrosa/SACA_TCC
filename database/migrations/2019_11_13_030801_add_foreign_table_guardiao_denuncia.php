<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignTableGuardiaoDenuncia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Guardiao', function (Blueprint $table) {
            $table->bigInteger('idLogDen')->unsigned();
            $table->foreign('idLogDen')->references('idLogin')->on('Denuncia');
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

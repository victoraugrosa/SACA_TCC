<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignTableLocalizacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Localizacao', function (Blueprint $table) {
            $table->bigInteger('idPeriodo')->unsigned();
            $table->foreign('idPeriodo')->references('id')->on('Periodo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Localizacao', function (Blueprint $table) {
            //
        });
    }
}

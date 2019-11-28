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
        Schema::table('localizacao', function (Blueprint $table) {
            $table->bigInteger('idDenuncia')->unsigned();
            $table->foreign('idDenuncia')->references('id')->on('denuncia')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('localizacao', function (Blueprint $table) {
            //
        });
    }
}

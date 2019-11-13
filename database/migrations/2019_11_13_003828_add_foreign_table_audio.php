<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignTableAudio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Audio', function (Blueprint $table) {
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
        Schema::table('Audio', function (Blueprint $table) {
            //
        });
    }
}

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
        Schema::table('guardiao', function (Blueprint $table) {
            $table->bigInteger('idUsuaria')->unsigned();
            $table->foreign('idUsuaria')->references('id')->on('usuaria')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('guardiao', function (Blueprint $table) {
            //
        });
    }
}

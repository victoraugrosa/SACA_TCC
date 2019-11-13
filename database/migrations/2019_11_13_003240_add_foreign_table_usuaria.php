<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignTableUsuaria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Usuaria', function (Blueprint $table) {
            $table->bigInteger('idContato')->unsigned();
            $table->foreign('idContato')->references('id')->on('Contato');
            $table->bigInteger('idEndereco')->unsigned();
            $table->foreign('idEndereco')->references('id')->on('Endereco');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Usuaria', function (Blueprint $table) {
            //
        });
    }
}

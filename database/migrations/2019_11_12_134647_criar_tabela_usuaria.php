<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaUsuaria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuaria', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nome', 200);
            $table->char('CPF', 11);
            $table->integer('estado_civil');
            $table->binary('foto');
            $table->integer('raca');
            $table->date('data_nasc');
            $table->integer('tipo_user');

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
        Schema::dropIfExists('usuaria');
    }
}

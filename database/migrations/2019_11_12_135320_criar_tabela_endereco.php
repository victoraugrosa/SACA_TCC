<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaEndereco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Endereco', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->char('CEP', 8);
            $table->string('rua', 100);
            $table->integer('numero')->nullable();
            $table->string('complemento', 100)->nulllable();
            $table->string('bairro', 100);
            $table->string('cidade', 100);
            $table->char('estado', 2);
            $table->string('pais', 100);
            
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
        Schema::dropIfExists('Endereco');
    }
}

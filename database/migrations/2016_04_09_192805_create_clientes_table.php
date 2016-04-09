<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cpf');
            $table->integer('endereco_id')->unsigned()->nullable();
            $table->foreign('endereco_id')->references('id')->on('enderecos')->onDelete('cascade');

            $table->integer('cidade_id');

            $table->integer('contato_id')->unsigned()->nullable();
            $table->foreign('contato_id')->references('id')->on('contatos')->onDelete('cascade');
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
        Schema::drop('clientes');
    }
}

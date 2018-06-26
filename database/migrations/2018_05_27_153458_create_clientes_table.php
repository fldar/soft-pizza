<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('password');
            $table->string('nome',255);
            $table->string('email',100);
            $table->string('telefone',20);
            $table->string('complemento',150);
            $table->integer('cep');
            $table->string('rua',150);
            $table->string('numero',20);
            $table->string('bairro',50);
            $table->string('cidade',50);
            $table->char('uf',2);
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
        Schema::dropIfExists('clientes');
    }
}

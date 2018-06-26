<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItensPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens_pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 191)->nullable();;
            $table->integer('id_pedido')->unsigned();
            $table->foreign('id_pedido')->references('id')->on('pedidos')->nullable();;
            $table->integer('id_produto')->unsigned()->nullable();->nullable();;
            $table->foreign('id_produto')->references('id')->on('produtos')->nullable();;
            $table->double('preco_item', 8,2)->nullable();;
            $table->double('quantidade_produto', 8,2)->nullable();;
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
        Schema::dropIfExists('itens_pedidos');
    }
}

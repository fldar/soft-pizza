<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('descricao', 255)->nullable()->default(null);
            $table->integer('id_grupo')->unsigned()->nullable()->default(null);
            $table->foreign('id_grupo')->references('id')->on('grupos');
            $table->integer('id_composicao')->unsigned()->nullable()->default(null);
            $table->foreign('id_composicao')->references('id')->on('produtos');
            $table->double('preco_custo',8,2)->nullable()->default(null);
            $table->double('preco_venda',8,2);
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
        Schema::dropIfExists('produtos');
    }
}

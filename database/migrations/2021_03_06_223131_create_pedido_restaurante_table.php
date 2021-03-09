<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoRestauranteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_restaurante', function (Blueprint $table) {
            $table->bigInteger('restaurante_id')->unsigned()->nullable();
            $table->bigInteger('pedido_id')->unsigned()->nullable();
            $table->foreign('restaurante_id')->references('id')->on('restaurantes');
            $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_restaurante');
    }
}

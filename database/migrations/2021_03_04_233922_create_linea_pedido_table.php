<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineaPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('linea_pedido', function (Blueprint $table) {
        //     $table->id();
        //     $table->bigInteger('user_id')->unsigned()->nullable();
        //     $table->bigInteger('restaurante_id')->unsigned()->nullable();
        //     $table->bigInteger('platos_id')->unsigned()->nullable();
        //     $table->bigInteger('pedido_id')->unsigned()->nullable();
        //     $table->foreign('user_id')->references('id')->on('users');
        //     $table->foreign('restaurante_id')->references('id')->on('restaurantes');
        //     $table->foreign('platos_id')->references('id')->on('platos');
        //     $table->foreign('pedido_id')->references('id')->on('pedidos');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('linea_pedido');
    }
}

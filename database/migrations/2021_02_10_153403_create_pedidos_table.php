<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->where('role_id','!=',4);
            $table->bigInteger('restaurante_id')->unsigned();
            $table->bigInteger('platos_id')->unsigned();
            $table->bigInteger('repartidor_id')->unsigned()->nullable()->where('role_id','=',3);
            $table->string('estado');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('restaurante_id')->references('id')->on('restaurantes')->onDelete('cascade');
            $table->foreign('platos_id')->references('id')->on('platos')->onDelete('cascade');
            $table->foreign('repartidor_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('pedidos');
    }
}

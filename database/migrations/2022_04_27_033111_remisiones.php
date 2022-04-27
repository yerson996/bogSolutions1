<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remisiones', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->bigInteger('doc')->unsigned();
            $table->bigInteger('item1')->unsigned();
            $table->bigInteger('cant1');
            $table->bigInteger('item2')->unsigned();
            $table->bigInteger('cant2');
            $table->bigInteger('item3')->unsigned();
            $table->bigInteger('cant3');
            $table->bigInteger('item4')->unsigned();
            $table->bigInteger('cant4');
            $table->bigInteger('item5')->unsigned();
            $table->bigInteger('cant5');
            $table->bigInteger('item6')->unsigned();
            $table->bigInteger('cant6');
            $table->bigInteger('item7')->unsigned();
            $table->bigInteger('cant7');
            $table->bigInteger('item8')->unsigned();
            $table->bigInteger('cant8');
            $table->bigInteger('item9')->unsigned();
            $table->bigInteger('cant9');
            $table->bigInteger('item10')->unsigned();
            $table->bigInteger('cant10');
            $table->bigInteger('item11')->unsigned();
            $table->bigInteger('cant11');
            $table->bigInteger('item12')->unsigned();
            $table->bigInteger('cant12');
            $table->bigInteger('item13')->unsigned();
            $table->bigInteger('cant13');
            $table->bigInteger('item14')->unsigned();
            $table->bigInteger('cant14');
            $table->bigInteger('item15')->unsigned();
            $table->bigInteger('cant15');
            $table->string('notas');
            $table->bigInteger('precio');
        
            $table->foreign('doc')->references('id')->on('clientes');
            $table->foreign('item1')->references('id')->on('productos');
            $table->foreign('item2')->references('id')->on('productos');
            $table->foreign('item3')->references('id')->on('productos');
            $table->foreign('item4')->references('id')->on('productos');
            $table->foreign('item5')->references('id')->on('productos');
            $table->foreign('item6')->references('id')->on('productos');
            $table->foreign('item7')->references('id')->on('productos');
            $table->foreign('item8')->references('id')->on('productos');
            $table->foreign('item9')->references('id')->on('productos');
            $table->foreign('item10')->references('id')->on('productos');
            $table->foreign('item11')->references('id')->on('productos');
            $table->foreign('item12')->references('id')->on('productos');
            $table->foreign('item13')->references('id')->on('productos');
            $table->foreign('item14')->references('id')->on('productos');
            $table->foreign('item15')->references('id')->on('productos');
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
        //
    }
};

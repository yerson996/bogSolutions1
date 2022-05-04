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
            $table->bigInteger('tprecio1');

            $table->bigInteger('item2')->nullable()->unsigned();
            $table->bigInteger('cant2')->nullable();
            $table->bigInteger('tprecio2')->nullable();

            $table->bigInteger('item3')->nullable()->unsigned();
            $table->bigInteger('cant3')->nullable();
            $table->bigInteger('tprecio3')->nullable();

            $table->bigInteger('item4')->nullable()->unsigned();
            $table->bigInteger('cant4')->nullable();
            $table->bigInteger('tprecio4')->nullable();

            $table->bigInteger('item5')->nullable()->unsigned();
            $table->bigInteger('cant5')->nullable();
            $table->bigInteger('tprecio5')->nullable();

            $table->bigInteger('item6')->nullable()->unsigned();
            $table->bigInteger('cant6')->nullable();
            $table->bigInteger('tprecio6')->nullable();

            $table->bigInteger('item7')->nullable()->unsigned();
            $table->bigInteger('cant7')->nullable();
            $table->bigInteger('tprecio7')->nullable();

            $table->bigInteger('item8')->nullable()->unsigned();
            $table->bigInteger('cant8')->nullable();
            $table->bigInteger('tprecio8')->nullable();

            $table->bigInteger('item9')->nullable()->unsigned();
            $table->bigInteger('cant9')->nullable();
            $table->bigInteger('tprecio9')->nullable();

            $table->bigInteger('item10')->nullable()->unsigned();
            $table->bigInteger('cant10')->nullable();
            $table->bigInteger('tprecio10')->nullable();

            $table->bigInteger('item11')->nullable()->unsigned();
            $table->bigInteger('cant11')->nullable();
            $table->bigInteger('tprecio11')->nullable();

            $table->bigInteger('item12')->nullable()->unsigned();
            $table->bigInteger('cant12')->nullable();
            $table->bigInteger('tprecio12')->nullable();

            $table->bigInteger('item13')->nullable()->unsigned();
            $table->bigInteger('cant13')->nullable();
            $table->bigInteger('tprecio13')->nullable();

            $table->bigInteger('item14')->nullable()->unsigned();
            $table->bigInteger('cant14')->nullable();
            $table->bigInteger('tprecio14')->nullable();

            $table->bigInteger('item15')->nullable()->unsigned();
            $table->bigInteger('cant15')->nullable();
            $table->bigInteger('tprecio15')->nullable();

            $table->string('pago')->nullable();
            $table->string('notas')->nullable();
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock', function (Blueprint $table) {
            $table->string('producto', 12);
            $table->integer('tienda');
            $table->integer('unidades');
            
            $table->primary(['producto', 'tienda']);
            $table->foreign('producto', 'stock_ibfk_1')->references('cod')->on('producto')->onUpdate('cascade');
            $table->foreign('tienda', 'stock_ibfk_2')->references('cod')->on('tienda')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock');
    }
}

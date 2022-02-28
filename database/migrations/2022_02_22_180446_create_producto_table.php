<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->string('cod', 12)->primary();
            $table->string('nombre', 200)->nullable();
            $table->string('nombre_corto', 50)->unique('nombre_corto');
            $table->text('descripcion')->nullable();
            $table->decimal('PVP', 10, 2);
            $table->string('familia', 6);
            
            $table->foreign('familia', 'producto_ibfk_1')->references('cod')->on('familia')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}

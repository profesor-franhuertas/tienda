<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebserviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webservice', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('uri', 100)->nullable();
            $table->string('apiKey', 100)->nullable();
            $table->string('codVendedor', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('webservice');
    }
}

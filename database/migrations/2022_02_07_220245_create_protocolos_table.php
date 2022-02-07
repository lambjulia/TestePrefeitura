<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProtocolosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('protocolos', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('contribuinte')->nullable(); 
            $table->string('descricao')->nullable();
            $table->string('data')->nullable();
            $table->string('prazo')->nullable();
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
        Schema::dropIfExists('protocolos');
    }
}

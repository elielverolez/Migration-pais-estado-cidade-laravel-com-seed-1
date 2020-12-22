<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbEstadoAisimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_estado_aisims', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->length(60);
            $table->string('uf')->length(2);;
            $table->integer('ibge');
           //  $table->point('lat_long');

            $table->unsignedBigInteger('tb_pais_aisims_id');
            $table->foreign('tb_pais_aisims_id')->references('id')->on('tb_pais_aisims');
            $table->json('ddd');
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
        Schema::dropIfExists('tb_estado_aisims');
    }
}

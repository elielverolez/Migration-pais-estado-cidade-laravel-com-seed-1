<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbCidadeAisimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cidade_aisims', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->length(120);

            $table->unsignedBigInteger('tb_estado_aisims_id');
            $table->foreign('tb_estado_aisims_id')->references('id')->on('tb_estado_aisims');
            //$table->point('lat_long');
            $table->integer('ibge');
            $table->double('latitude',9,2)->nullable();
            $table->double('longitude',9,2)->nullable();;
            $table->integer('cod_tom')->default(0);
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
        Schema::dropIfExists('tb_cidade_aisims');
    }
}

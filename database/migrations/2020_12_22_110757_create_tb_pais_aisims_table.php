<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPaisAisimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pais_aisims', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->length(60);
            $table->string('nome_ingles')->length(60);
            $table->string('sigla')->length(2)->nullable();
            $table->string('bacen')->length(40); 
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
        Schema::dropIfExists('tb_pais_aisims');
    }
}

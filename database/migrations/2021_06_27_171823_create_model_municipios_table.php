<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipio', function (Blueprint $table) {
            $table->integer('COD_MUNICIPIO')->primary();
            $table->string('NOM_MUNICIPIO',100);
            $table->integer('NUM_POPULACAO')->nullable();
            $table->string('NOM_PREFEITO',100)->nullable();
            $table->string('SGL_UNIDADE_FEDERATIVA',2);
            $table->foreign('SGL_UNIDADE_FEDERATIVA')->references('SGL_UNIDADE_FEDERATIVA')->on('unidade_federativa');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipio');
    }
}

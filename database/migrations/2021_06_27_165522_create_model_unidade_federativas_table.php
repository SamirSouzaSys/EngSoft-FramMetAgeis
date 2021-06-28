<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelUnidadeFederativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidade_federativa', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('SGL_UNIDADE_FEDERATIVA',2)->primary();
            $table->string('NOM_UNIDADE_FEDERATIVA',100);

            // $table->primary('SGL_UNIDADE_FEDERATIVA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidade_federativas');
    }
}

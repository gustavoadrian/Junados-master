<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasComsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias_coms', function (Blueprint $table) {
            $table->Increments('id');
            $table->UnsignedInteger('instituto_id');
            $table->foreign('instituto_id')->references('id')->on('institutos');
            $table->string('nombre');
            $table->integer('anio');
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
        Schema::dropIfExists('materias_coms');
    }
}

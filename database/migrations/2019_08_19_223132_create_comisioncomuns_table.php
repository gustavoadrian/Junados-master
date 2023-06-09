<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComisioncomunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comisioncomuns', function (Blueprint $table) {
            $table->Increments('id');
            $table->UnsignedInteger('materiacomun_id');
            $table->foreign('materiacomun_id')->references('id')->on('materias_coms');
            $table->UnsignedInteger('aula_id');
            $table->foreign('aula_id')->references('id')->on('aulas');
            $table->UnsignedInteger('profesor_id')->nullable();
            $table->foreign('profesor_id')->references('id')->on('profesors');
            $table->string('nombre');
            $table->string('horario');
            $table->string('dia');
            $table->boolean('estado')->default(true);
            
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
        Schema::dropIfExists('comisioncomuns');
    }
}

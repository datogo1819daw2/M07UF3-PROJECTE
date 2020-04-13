<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraellaProgramaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graella_programa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('programa_id');
            $table->foreignId('graella_id');
            $table->timestamps();
            $table->foreign('programa_id')->references('id')->on('programas')->onDelete('cascade');
            $table->foreign('graella_id')->references('id')->on('graellas')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('graella_programas');
    }
}

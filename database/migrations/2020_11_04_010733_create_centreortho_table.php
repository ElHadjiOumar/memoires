<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentreorthoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centreortho', function (Blueprint $table) {
            $table->id();
            $table->string('centreOrtho_nom');
            $table->string('centreOrtho_ville');
            $table->string('centreOrtho_adress');
            $table->string('centreOrtho_numero');
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
        Schema::dropIfExists('centreortho');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHopitaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hopitale', function (Blueprint $table) {
            $table->id();
            $table->string('hopital_nom');
            $table->string('hopital_type');
            $table->string('hopital_ville');
            $table->string('hopital_adress');
            $table->string('hopital_numero');
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
        Schema::dropIfExists('hopitale');
    }
}

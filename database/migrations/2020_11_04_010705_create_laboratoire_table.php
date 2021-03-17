<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboratoireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratoire', function (Blueprint $table) {
            $table->id();
            $table->string('laboratoire_nom');
            $table->string('laboratoire_type');
            $table->string('laboratoire_ville');
            $table->string('laboratoire_adress');
            $table->string('laboratoire_numero');
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
        Schema::dropIfExists('laboratoire');
    }
}

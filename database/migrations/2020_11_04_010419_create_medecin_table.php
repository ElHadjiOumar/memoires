<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedecinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medecin', function (Blueprint $table) {
            $table->id();
            $table->integer('specialisation_id');
            $table->string('medecin_nom');
            $table->string('medecin_prenom');
            $table->string('medecin_ville');
            $table->string('medecin_adress');
            $table->string('medecin_numero');
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
        Schema::dropIfExists('medecin');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpticienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opticien', function (Blueprint $table) {
            $table->id();
            $table->string('opticien_nom');            
            $table->string('opticien_prenom');
            $table->string('opticien_ville');
            $table->string('opticien_adress');
            $table->string('opticien_numero');
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
        Schema::dropIfExists('opticien');
    }
}

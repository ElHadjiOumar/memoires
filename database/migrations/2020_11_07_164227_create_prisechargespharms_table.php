<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrisechargespharmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prisechargespharms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->integer('famille_id')->nullable();
            $table->string('nom_prestataire')->nullable();
            $table->string('prenom_prestataire')->nullable();
            $table->string('nom_user')->nullable();
            $table->string('prenom_user')->nullable();
            $table->decimal('sub_total')->nullable();
            $table->decimal('prise_charge')->nullable();
            $table->decimal('total')->nullable();
            $table->decimal('totalIPM')->nullable();
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
        Schema::dropIfExists('prisechargespharms');
    }
}

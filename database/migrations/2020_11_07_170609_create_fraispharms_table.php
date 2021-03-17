<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFraispharmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fraispharms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('prisechargespharms_id')->unsigned();
            $table->string('nom')->nullable();
            $table->integer('qt')->nullable();
            $table->decimal('prix')->nullable();
            $table->decimal('montant')->nullable();
            $table->timestamps();
            $table->foreign('prisechargespharms_id')->references('id')->on('prisechargespharms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fraispharms');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFraismedicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fraismedics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('prisecharge_id')->unsigned();
            $table->string('nom')->nullable();
            $table->decimal('montant')->nullable();
            $table->timestamps();
            $table->foreign('prisecharge_id')->references('id')->on('prisecharges');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fraismedics');
    }
}

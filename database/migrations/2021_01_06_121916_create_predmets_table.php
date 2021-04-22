<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePredmetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predmets', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->unsignedBigInteger('id_nivoa');
            $table->boolean('strucan_predmet')->default(false);
            $table->unsignedBigInteger('id_skole')->nullable();
            $table->timestamps();

            $table->foreign('id_nivoa')->references('id')->on('nivo_obrazovanjas');
            $table->foreign('id_skole')->references('id')->on('skolas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('predmets');
    }
}

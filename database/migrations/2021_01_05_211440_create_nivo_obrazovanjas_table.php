<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNivoObrazovanjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nivo_obrazovanjas', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->timestamps();
        });

        \DB::table('nivo_obrazovanjas')->insert([
            ['naziv' => 'Osnovno obrazovanje'],
            ['naziv' => 'Srednje obrazovanje'],
            ['naziv' => 'Visoko obrazovanje']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nivo_obrazovanjas');
    }
}

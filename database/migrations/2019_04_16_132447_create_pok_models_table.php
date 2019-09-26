<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePokModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pok_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('realisasi_fisik');
            $table->string('realisasi_keu');
            $table->string('user_id');
            $table->string('rko_id');
            $table->string('target_id');
            $table->string('bulan');
            $table->string('deviasi');
            $table->string('ket');
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
        Schema::dropIfExists('pok_models');
    }
}

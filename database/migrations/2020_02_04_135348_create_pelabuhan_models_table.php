<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelabuhanModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelabuhan_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tahun');
            $table->string('jenis_volume');
            $table->string('pelabuhan_muat');
            $table->string('volume');
            $table->string('nilai');
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
        Schema::dropIfExists('pelabuhan_models');
    }
}

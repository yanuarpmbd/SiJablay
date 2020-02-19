<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNegaraTujuanModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negara_tujuan_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('tahun');
            $table->string('jenis_volumee');
            $table->string('negara_tujuan');
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
        Schema::dropIfExists('negara_tujuan_models');
    }
}

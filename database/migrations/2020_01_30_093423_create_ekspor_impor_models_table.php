<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEksporImporModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ekspor_impor_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('tahun');
            $table->string('jenis_volume');
            $table->string('jenis_komoditi');
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
        Schema::dropIfExists('ekspor_impor_models');
    }
}

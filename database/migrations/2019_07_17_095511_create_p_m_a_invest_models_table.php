<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePMAInvestModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pma_invest_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sektor');
            $table->string('nama_perusahaan');
            $table->string('cetak_bid_usaha');
            $table->string('provinsi');
            $table->string('kab_kota');
            $table->string('negara');
            $table->string('no_izin');
            $table->string('tambahan_invest');
            $table->string('total_invest');
            $table->string('proyek');
            $table->string('tki');
            $table->string('tka');
            $table->string('tahun');
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
        Schema::dropIfExists('pma_invest_models');
    }
}

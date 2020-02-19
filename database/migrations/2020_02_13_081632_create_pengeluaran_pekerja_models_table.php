<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengeluaranPekerjaModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengeluaran_pekerja_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kabupaten_kota');
            $table->dateTime('tahun');
            $table->string('banyak_perusahaan');
            $table->string('produksi_upah');
            $table->string('produksi_insentif');
            $table->string('lainnya_upah');
            $table->string('lainnya_insentif');
            $table->string('jumlah');
            $table->string('pengeluaran_pekerja');
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
        Schema::dropIfExists('pengeluaran_pekerja_models');
    }
}

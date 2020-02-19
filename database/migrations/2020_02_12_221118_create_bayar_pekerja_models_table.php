<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBayarPekerjaModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayar_pekerja_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kabupaten_kota');
            $table->dateTime('tahun');
            $table->string('banyak_perusahaan');
            $table->string('produksi_pria');
            $table->string('produksi_wanita');
            $table->string('jml_produksi');
            $table->string('lainnya_pria');
            $table->string('lainnya_wanita');
            $table->string('jml_lainnya');
            $table->string('total');
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
        Schema::dropIfExists('bayar_pekerja_models');
    }
}

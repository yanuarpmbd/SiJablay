<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjualanBarangModalModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan_barang_modal_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kabupaten_kota');
            $table->string('tahun');
            $table->string('jual_tanah');
            $table->string('jual_gedung');
            $table->string('jual_mesin');
            $table->string('jual_kendaraan');
            $table->string('jual_tetap_lainnya');
            $table->string('jual_jumlah');
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
        Schema::dropIfExists('penjualan_barang_modal_models');
    }
}

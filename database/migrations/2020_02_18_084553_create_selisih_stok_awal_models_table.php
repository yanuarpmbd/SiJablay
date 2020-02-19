<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelisihStokAwalModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selisih_stok_awal_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kabupaten_kota');
            $table->dateTime('tahun');
            $table->string('bahan_baku');
            $table->string('setengah_jadi');
            $table->string('barang_jadi');
            $table->string('jumlah_selisih');
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
        Schema::dropIfExists('selisih_stok_awal_models');
    }
}

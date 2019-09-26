<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOssModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oss_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kab_kota_id');
            $table->string('nib');
            $table->string('nama_perseroan');
            $table->string('alamat_pendirian');
            $table->string('nama_pendaftar');
            $table->string('telepon_pendaftar');
            $table->string('email_pendaftar');
            $table->string('nik');
            $table->string('daerah');
            $table->string('jumlah_tki_l');
            $table->string('jumlah_tki_p');
            $table->string('kbli');
            $table->string('bangunan');
            $table->string('mesin_peralatan');
            $table->string('mesin_peralatan_impor');
            $table->string('pembelian_pematangan_tanah');
            $table->string('investasi_lain');
            $table->string('jumlah_inventaris');
            $table->string('modal_kerja');
            $table->string('jumlah_investasi');
            $table->string('tanggal_pengajuan_oss');
            $table->string('tanggal_terbit_oss');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oss_models');
    }
}

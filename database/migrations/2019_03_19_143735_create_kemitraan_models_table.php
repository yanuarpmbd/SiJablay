<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKemitraanModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kemitraan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_perusahaan');
            $table->string('status_bu');
            $table->string('alamat_bu');
            $table->integer('no_telp');
            $table->string('alamat_proyek');
            $table->string('kab_kota');
            $table->string('pemilik');
            $table->string('jns_produksi');
            $table->string('kbli');
            $table->string('kapasitas');
            $table->string('nilai_invest');
            $table->string('omzet');
            $table->string('jml_pegawai');
            $table->string('aspek_krjsm');
            $table->string('sektor');
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
        Schema::dropIfExists('kemitraan_models');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToKegiatanModels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kegiatan_models', function (Blueprint $table) {
            $table->string('seksi');
            $table->string('bidang_id');
            $table->string('nama_kegiatan');
            $table->string('program_kerja');
            $table->string('peserta');
            $table->string('tempat');
            $table->string('tanggal');
            $table->string('pukul_mulai');
            $table->string('pukul_selesai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kegiatan_models', function (Blueprint $table) {
            //
        });
    }
}

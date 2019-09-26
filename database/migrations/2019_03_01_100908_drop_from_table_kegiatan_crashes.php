<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropFromTableKegiatanCrashes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kegiatan_crashes', function (Blueprint $table) {
            $table->dropColumn('seksi');
            $table->dropColumn('nama_kegiatan');
            $table->dropColumn('program_kerja');
            $table->dropColumn('peserta');
            $table->dropColumn('tempat');
            $table->dropColumn('tanggal');
            $table->dropColumn('pukul_mulai');
            $table->dropColumn('pukul_selesai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('table_kegiatan_crashes', function (Blueprint $table) {
            //
        });
    }
}

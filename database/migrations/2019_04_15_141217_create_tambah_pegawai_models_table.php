<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTambahPegawaiModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tambah_pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('ttl');
            $table->string('alamat');
            $table->string('pendidikn');
            $table->string('unit_kerja');
            $table->string('nip');
            $table->string('gol');
            $table->string('jabatan');
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
        Schema::dropIfExists('tambah_pegawai');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubMenuKegiatanModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_menu_kegiatan_models_baru', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('rko_id');
            $table->string('nama_sub_keg');
            $table->bigInteger('anggaran_sub');
            $table->integer('tager_sub');
            $table->integer('user_id');
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
        Schema::dropIfExists('sub_menu_kegiatan_models');
    }
}

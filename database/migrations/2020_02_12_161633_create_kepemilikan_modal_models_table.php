<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKepemilikanModalModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepemilikan_modal_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kabupaten_kota');
            $table->dateTime('tahun');
            $table->string('pem_pusat');
            $table->string('pem_daerah');
            $table->string('swasta_nas');
            $table->string('asing');
            $table->string('jumlah');
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
        Schema::dropIfExists('kepemilikan_modal_models');
    }
}

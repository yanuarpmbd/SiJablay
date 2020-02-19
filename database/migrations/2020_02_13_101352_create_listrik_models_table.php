<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListrikModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listrik_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kabupaten_kota');
            $table->dateTime('tahun');
            $table->string('produksi_sendiri');
            $table->string('dibeli_banyaknya');
            $table->string('dibeli_nilai');
            $table->string('dijual_banyaknya');
            $table->string('dijual_nilai');
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
        Schema::dropIfExists('listrik_models');
    }
}

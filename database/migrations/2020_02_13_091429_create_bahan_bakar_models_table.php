<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBahanBakarModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bahan_bakar_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kabupaten_kota');
            $table->dateTime('tahun');
            $table->string('bensin');
            $table->string('solar');
            $table->string('batubara');
            $table->string('gas');
            $table->string('lpg');
            $table->string('pelumas');
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
        Schema::dropIfExists('bahan_bakar_models');
    }
}

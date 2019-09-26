<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRekapPerizinanModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekap_perizinan_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('izin_id');
            $table->string('sop');
            $table->date('bulan');
            $table->string('izin');
            $table->string('nonizin');
            $table->string('waktu_selesai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekap_perizinan_models');
    }
}

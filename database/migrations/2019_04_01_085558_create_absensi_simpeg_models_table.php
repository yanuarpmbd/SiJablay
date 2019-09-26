<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensiSimpegModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi_simpeg_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip');
            $table->string('nama');
            $table->nullableTimestamps('am_01');
            $table->nullableTimestamps('ap_01');
            $table->string('s_01');
            $table->nullableTimestamps('am_02');
            $table->nullableTimestamps('ap_02');
            $table->string('s_02');
            $table->nullableTimestamps('am_03');
            $table->nullableTimestamps('ap_03');
            $table->string('s_03');
            $table->nullableTimestamps('am_04');
            $table->nullableTimestamps('ap_04');
            $table->string('s_04');
            $table->nullableTimestamps('am_05');
            $table->nullableTimestamps('ap_05');
            $table->string('s_05');
            $table->nullableTimestamps('am_06');
            $table->nullableTimestamps('ap_06');
            $table->string('s_06');
            $table->nullableTimestamps('am_07');
            $table->nullableTimestamps('ap_07');
            $table->string('s_07');
            $table->nullableTimestamps('am_08');
            $table->nullableTimestamps('ap_08');
            $table->string('s_08');
            $table->nullableTimestamps('am_09');
            $table->nullableTimestamps('ap_09');
            $table->string('s_09');
            $table->nullableTimestamps('am_10');
            $table->nullableTimestamps('ap_10');
            $table->string('s_10');
            $table->nullableTimestamps('am_11');
            $table->nullableTimestamps('ap_11');
            $table->string('s_11');
            $table->nullableTimestamps('am_12');
            $table->nullableTimestamps('ap_12');
            $table->string('s_12');
            $table->nullableTimestamps('am_13');
            $table->nullableTimestamps('ap_13');
            $table->string('s_13');
            $table->nullableTimestamps('am_14');
            $table->nullableTimestamps('ap_14');
            $table->string('s_14');
            $table->nullableTimestamps('am_15');
            $table->nullableTimestamps('ap_15');
            $table->string('s_15');
            $table->nullableTimestamps('am_16');
            $table->nullableTimestamps('ap_16');
            $table->string('s_16');
            $table->nullableTimestamps('am_17');
            $table->nullableTimestamps('ap_17');
            $table->string('s_17');
            $table->nullableTimestamps('am_18');
            $table->nullableTimestamps('ap_18');
            $table->string('s_18');
            $table->nullableTimestamps('am_19');
            $table->nullableTimestamps('ap_19');
            $table->string('s_19');
            $table->nullableTimestamps('am_20');
            $table->nullableTimestamps('ap_20');
            $table->string('s_20');
            $table->nullableTimestamps('am_21');
            $table->nullableTimestamps('ap_21');
            $table->string('s_21');
            $table->nullableTimestamps('am_22');
            $table->nullableTimestamps('ap_22');
            $table->string('s_22');
            $table->nullableTimestamps('am_23');
            $table->nullableTimestamps('ap_23');
            $table->string('s_23');
            $table->nullableTimestamps('am_24');
            $table->nullableTimestamps('ap_24');
            $table->string('s_24');
            $table->nullableTimestamps('am_25');
            $table->nullableTimestamps('ap_25');
            $table->string('s_25');
            $table->nullableTimestamps('am_26');
            $table->nullableTimestamps('ap_26');
            $table->string('s_26');
            $table->nullableTimestamps('am_27');
            $table->nullableTimestamps('ap_27');
            $table->string('s_27');
            $table->nullableTimestamps('am_28');
            $table->nullableTimestamps('ap_28');
            $table->string('s_28');
            $table->nullableTimestamps('am_29');
            $table->nullableTimestamps('ap_29');
            $table->string('s_29');
            $table->nullableTimestamps('am_30');
            $table->nullableTimestamps('ap_30');
            $table->string('s_30');
            $table->nullableTimestamps('am_31');
            $table->nullableTimestamps('ap_31');
            $table->string('s_31');
            $table->string('kwk');
            $table->string('alpha');
            //$table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensi_simpeg_models');
    }
}

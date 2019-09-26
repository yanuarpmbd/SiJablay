<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvanceSpt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advance_spt', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomor_spt');
            $table->string('perihal');
            $table->string('tgl_spt');
            $table->string('user_id');
            $table->string('pelaksana');
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
        Schema::dropIfExists('advance_spt');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotulensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notulens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('tgl');
            $table->string('tempat');
            $table->string('acara');
            $table->string('pemimpin_rpt');
            $table->string('peserta');
            $table->longText('hasil_rapat');
            $table->string('pengampu_keg_id');
            $table->string('notulis_id');
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
        Schema::dropIfExists('notulens');
    }
}

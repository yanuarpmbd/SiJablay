<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToSpt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('spt', function ($table) {
            $table->string('tujuan');
            $table->string('data_asn_models_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('spt', function ($table) {
            $table->string('kpa');
            $table->string('tujuan');
            $table->string('data_asn_models_id');
        });
    }
}

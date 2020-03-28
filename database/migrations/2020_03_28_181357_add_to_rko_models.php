<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToRkoModels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rko_models_baru', function (Blueprint $table) {
            $table->dropColumn('target_fisik');
            $table->bigInteger('rko_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rko_models', function (Blueprint $table) {
            //
        });
    }
}

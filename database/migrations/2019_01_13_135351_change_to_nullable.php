<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeToNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_asn_models', function($table)
        {
            $table->string('tmp_lahir', 250)->nullable()->change();
            $table->string('email', 250)->nullable()->change();
            $table->string('alamat', 500)->nullable()->change();
            $table->string('pendidikan', 500)->nullable()->change();
            $table->string('unit_kerja', 500)->nullable()->change();
            $table->string('hp', 250)->nullable()->change();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}

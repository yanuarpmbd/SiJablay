<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColToDataAsnModels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_asn_models', function($table) {
            $table->string('tmp_lahir');
            $table->string('email');
            $table->string('alamat');
            $table->string('pendidikan');
            $table->string('unit_kerja');
            $table->string('hp');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_asn_models', function($table) {
            $table->dropColumn('tmp_lahir');
            $table->dropColumn('email');
            $table->dropColumn('alamat');
            $table->dropColumn('pendidikan');
            $table->dropColumn('unit_kerja');
            $table->dropColumn('hp');
        });
    }
}

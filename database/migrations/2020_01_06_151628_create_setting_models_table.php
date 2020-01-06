<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingModelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('setting_models', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_kepala');
			$table->string('jabatan_kepala');
			$table->string('pangkat_kepala');
			$table->string('nip_kepala');
			$table->timestamps();
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
		Schema::drop('setting_models');
	}

}

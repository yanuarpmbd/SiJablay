<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTargetRealisasiModelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('target_realisasi_models', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('target');
			$table->string('bulan');
			$table->integer('rko_id');
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
		Schema::drop('target_realisasi_models');
	}

}

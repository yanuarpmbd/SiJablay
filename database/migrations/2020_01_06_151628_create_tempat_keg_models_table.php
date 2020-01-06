<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTempatKegModelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tempat_keg_models', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('tempat_keg');
			$table->string('status_tempat');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tempat_keg_models');
	}

}

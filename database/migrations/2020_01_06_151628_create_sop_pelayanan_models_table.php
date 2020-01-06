<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSopPelayananModelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sop_pelayanan_models', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('sop')->nullable();
			$table->string('jenis_izin_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sop_pelayanan_models');
	}

}

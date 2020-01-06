<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBidangModelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bidang_models', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('bidang');
			$table->string('nama_dok');
			$table->string('dok');
			$table->string('bulan');
			$table->string('ket');
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
		Schema::drop('bidang_models');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRkoModelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rko_models_baru', function(Blueprint $table)
		{
			$table->integer('id')->unsigned();
			$table->string('nama_kegiatan');
			$table->bigInteger('jumlah_anggaran');
			$table->integer('target_fisik');
			$table->integer('user_id');
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
		Schema::drop('rko_models');
	}

}

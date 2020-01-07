<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubKegiatanModelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sub_kegiatan_models', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_sub_keg');
			$table->string('jml_anggaran_sub');
			$table->string('rko_id');
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
		Schema::drop('sub_kegiatan_models');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKegiatanModelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kegiatan_models', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('seksi');
			$table->string('bidang_id');
			$table->string('nama_kegiatan');
			$table->string('program_kerja');
			$table->string('peserta');
			$table->string('tempat');
			$table->string('tanggal');
			$table->string('pukul_mulai');
			$table->string('pukul_selesai');
			$table->string('crash')->nullable();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kegiatan_models');
	}

}

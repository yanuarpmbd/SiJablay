<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRekapPengaduanModelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rekap_pengaduan_models', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('tanggal');
			$table->string('nama');
			$table->string('jenis_kelamin');
			$table->string('media');
			$table->string('jenis_layanan');
			$table->string('no_telp');
			$table->string('sektor');
			$table->string('wa_email');
			$table->string('rincian_aduan');
			$table->string('penyelesaian');
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
		Schema::drop('rekap_pengaduan_models');
	}

}

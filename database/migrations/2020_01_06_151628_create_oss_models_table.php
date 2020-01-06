<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOssModelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oss_models', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nib');
			$table->string('nama_perseroan');
			$table->string('alamat_pendirian');
			$table->string('nama_pendaftar');
			$table->string('telepon_pendaftar')->nullable();
			$table->string('email_pendaftar')->nullable();
			$table->string('nik');
			$table->string('daerah');
			$table->string('jumlah_tki_l')->nullable();
			$table->string('jumlah_tki_p')->nullable();
			$table->string('kbli')->nullable();
			$table->string('bangunan')->nullable();
			$table->string('mesin_peralatan')->nullable();
			$table->string('mesin_peralatan_impor')->nullable();
			$table->string('pembelian_pematangan_tanah')->nullable();
			$table->string('investasi_lain')->nullable();
			$table->string('jumlah_inventaris')->nullable();
			$table->string('modal_kerja')->nullable();
			$table->string('jumlah_investasi')->nullable();
			$table->string('tanggal_pengajuan_oss')->nullable();
			$table->string('tanggal_terbit_oss')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oss_models');
	}

}

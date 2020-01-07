<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKemitraanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kemitraan', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_perusahaan');
			$table->string('status_bu');
			$table->string('alamat_bu');
			$table->string('no_telp');
			$table->string('alamat_proyek');
			$table->string('kab_kota');
			$table->string('pemilik');
			$table->string('jns_produksi')->nullable();
			$table->string('kbli')->nullable();
			$table->string('kapasitas')->nullable();
			$table->string('nilai_invest')->nullable();
			$table->string('omzet')->nullable();
			$table->string('jml_pegawai')->nullable();
			$table->string('aspek_krjsm')->nullable();
			$table->string('sektor');
			$table->string('mou')->nullable();
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
		Schema::drop('kemitraan');
	}

}

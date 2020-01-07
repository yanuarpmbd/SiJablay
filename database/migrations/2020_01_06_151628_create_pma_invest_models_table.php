<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePmaInvestModelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pma_invest_models', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('sektor');
			$table->string('nama_perusahaan');
			$table->text('cetak_bid_usaha', 65535)->nullable();
			$table->string('provinsi');
			$table->string('kab_kota');
			$table->string('negara');
			$table->string('no_izin')->nullable();
			$table->string('tambahan_invest')->nullable();
			$table->string('total_invest')->nullable();
			$table->string('proyek')->nullable();
			$table->string('tki')->nullable();
			$table->string('tka')->nullable();
			$table->string('tahun');
			$table->string('pma_pmdn');
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
		Schema::drop('pma_invest_models');
	}

}

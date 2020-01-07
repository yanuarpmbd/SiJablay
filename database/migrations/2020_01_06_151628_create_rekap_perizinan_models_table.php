<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRekapPerizinanModelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rekap_perizinan_models', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('izin_id');
			$table->string('sop');
			$table->string('jumlah_izin');
			$table->string('bulan');
			$table->string('izin');
			$table->string('nonizin');
			$table->string('waktu_selesai');
			$table->string('persen_sop');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rekap_perizinan_models');
	}

}

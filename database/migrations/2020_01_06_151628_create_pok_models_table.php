<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePokModelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pok_models', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('realisasi_fisik');
			$table->string('realisasi_keu');
			$table->string('user_id');
			$table->string('rko_id');
			$table->string('target');
			$table->string('bulan');
			$table->string('fisik_sblm_bln');
			$table->string('keu_sblm_bln');
			$table->integer('fisik_smp_skrg');
			$table->integer('keu_smp_skrg');
			$table->string('deviasi');
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
		Schema::drop('pok_models');
	}

}

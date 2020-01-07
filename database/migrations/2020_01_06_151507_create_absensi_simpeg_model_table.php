<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAbsensiSimpegModelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('absensi_simpeg_model', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nip', 32);
			$table->string('nama', 128)->nullable();
			$table->string('am_01', 20)->nullable()->default('-');
			$table->string('ap_01', 20)->nullable()->default('-');
			$table->string('s_01', 8)->nullable()->default('');
			$table->string('am_02', 20)->nullable()->default('-');
			$table->string('ap_02', 20)->nullable()->default('-');
			$table->string('s_02', 8)->nullable()->default('');
			$table->string('am_03', 20)->nullable()->default('-');
			$table->string('ap_03', 20)->nullable()->default('-');
			$table->string('s_03', 8)->nullable()->default('');
			$table->string('am_04', 20)->nullable()->default('-');
			$table->string('ap_04', 20)->nullable()->default('-');
			$table->string('s_04', 8)->nullable()->default('');
			$table->string('am_05', 20)->nullable()->default('-');
			$table->string('ap_05', 20)->nullable()->default('-');
			$table->string('s_05', 8)->nullable()->default('');
			$table->string('am_06', 20)->nullable()->default('-');
			$table->string('ap_06', 20)->nullable()->default('-');
			$table->string('s_06', 8)->nullable()->default('');
			$table->string('am_07', 20)->nullable()->default('-');
			$table->string('ap_07', 20)->nullable()->default('-');
			$table->string('s_07', 8)->nullable()->default('');
			$table->string('am_08', 20)->nullable()->default('-');
			$table->string('ap_08', 20)->nullable()->default('-');
			$table->string('s_08', 8)->nullable()->default('');
			$table->string('am_09', 20)->nullable()->default('-');
			$table->string('ap_09', 20)->nullable()->default('-');
			$table->string('s_09', 8)->nullable()->default('');
			$table->string('am_10', 20)->nullable()->default('-');
			$table->string('ap_10', 20)->nullable()->default('-');
			$table->string('s_10', 8)->nullable()->default('');
			$table->string('am_11', 20)->nullable()->default('-');
			$table->string('ap_11', 20)->nullable()->default('-');
			$table->string('s_11', 8)->nullable()->default('');
			$table->string('am_12', 20)->nullable()->default('-');
			$table->string('ap_12', 20)->nullable()->default('-');
			$table->string('s_12', 8)->nullable()->default('');
			$table->string('am_13', 20)->nullable()->default('-');
			$table->string('ap_13', 20)->nullable()->default('-');
			$table->string('s_13', 8)->nullable()->default('');
			$table->string('am_14', 20)->nullable()->default('-');
			$table->string('ap_14', 20)->nullable()->default('-');
			$table->string('s_14', 8)->nullable()->default('');
			$table->string('am_15', 20)->nullable()->default('-');
			$table->string('ap_15', 20)->nullable()->default('-');
			$table->string('s_15', 8)->nullable()->default('');
			$table->string('am_16', 20)->nullable()->default('-');
			$table->string('ap_16', 20)->nullable()->default('-');
			$table->string('s_16', 8)->nullable()->default('');
			$table->string('am_17', 20)->nullable()->default('-');
			$table->string('ap_17', 20)->nullable()->default('-');
			$table->string('s_17', 8)->nullable()->default('');
			$table->string('am_18', 20)->nullable()->default('-');
			$table->string('ap_18', 20)->nullable()->default('-');
			$table->string('s_18', 8)->nullable()->default('');
			$table->string('am_19', 20)->nullable()->default('-');
			$table->string('ap_19', 20)->nullable()->default('-');
			$table->string('s_19', 8)->nullable()->default('');
			$table->string('am_20', 20)->nullable()->default('-');
			$table->string('ap_20', 20)->nullable()->default('-');
			$table->string('s_20', 8)->nullable()->default('');
			$table->string('am_21', 20)->nullable()->default('-');
			$table->string('ap_21', 20)->nullable()->default('-');
			$table->string('s_21', 8)->nullable()->default('');
			$table->string('am_22', 20)->nullable()->default('-');
			$table->string('ap_22', 20)->nullable()->default('-');
			$table->string('s_22', 8)->nullable()->default('');
			$table->string('am_23', 20)->nullable()->default('-');
			$table->string('ap_23', 20)->nullable()->default('-');
			$table->string('s_23', 8)->nullable()->default('');
			$table->string('am_24', 20)->nullable()->default('-');
			$table->string('ap_24', 20)->nullable()->default('-');
			$table->string('s_24', 8)->nullable()->default('');
			$table->string('am_25', 20)->nullable()->default('-');
			$table->string('ap_25', 20)->nullable()->default('-');
			$table->string('s_25', 8)->nullable()->default('');
			$table->string('am_26', 20)->nullable()->default('-');
			$table->string('ap_26', 20)->nullable()->default('-');
			$table->string('s_26', 8)->nullable()->default('');
			$table->string('am_27', 20)->nullable()->default('-');
			$table->string('ap_27', 20)->nullable()->default('-');
			$table->string('s_27', 8)->nullable()->default('');
			$table->string('am_28', 20)->nullable()->default('-');
			$table->string('ap_28', 20)->nullable()->default('-');
			$table->string('s_28', 8)->nullable()->default('');
			$table->string('am_29', 20)->nullable()->default('-');
			$table->string('ap_29', 20)->nullable()->default('-');
			$table->string('s_29', 8)->nullable()->default('');
			$table->string('am_30', 20)->nullable()->default('-');
			$table->string('ap_30', 20)->nullable()->default('-');
			$table->string('s_30', 8)->nullable()->default('');
			$table->string('am_31', 20)->nullable()->default('-');
			$table->string('ap_31', 20)->nullable()->default('-');
			$table->string('s_31', 8)->nullable()->default('');
			$table->string('kwk', 5)->nullable();
			$table->string('alpha', 5)->nullable();
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
		Schema::drop('absensi_simpeg_model');
	}

}

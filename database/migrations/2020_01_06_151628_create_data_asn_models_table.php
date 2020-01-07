<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDataAsnModelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('data_asn_models', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nip');
			$table->string('nama');
			$table->string('tgl_lahir');
			$table->string('gol');
			$table->string('jabatan', 350)->nullable();
			$table->string('kode_lokasi')->nullable();
			$table->timestamps();
			$table->string('tmp_lahir', 250)->nullable();
			$table->string('email', 250)->nullable();
			$table->string('alamat', 500)->nullable();
			$table->string('pendidikan', 500)->nullable();
			$table->string('unit_kerja', 500)->nullable();
			$table->string('hp', 250)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('data_asn_models');
	}

}

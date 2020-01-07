<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSptTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('spt', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nomor_spt');
			$table->string('perihal');
			$table->string('tgl_spt');
			$table->string('tgl_berangkat');
			$table->string('tgl_pulang');
			$table->timestamps();
			$table->string('tujuan');
			$table->string('data_asn_models_id');
			$table->string('user_id');
			$table->string('rek_id');
			$table->string('kendaraan');
			$table->text('pembuka')->nullable();
			$table->string('non_asn_id')->nullable();
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
		Schema::drop('spt');
	}

}

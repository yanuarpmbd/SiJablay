<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsnSptTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asn_spt', function(Blueprint $table)
		{
			$table->integer('data_asn_models_id')->unsigned()->nullable();
			$table->integer('spt_id')->unsigned();
			$table->string('tgl_berangkat')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('asn_spt');
	}

}

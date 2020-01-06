<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBidangsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bidangs', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->string('kode_bidang');
			$table->string('nama_bidang');
			$table->string('nama_short');
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
		Schema::drop('bidangs');
	}

}

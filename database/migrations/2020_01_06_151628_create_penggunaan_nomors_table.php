<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePenggunaanNomorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('penggunaan_nomors', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->bigInteger('arsip_id')->nullable();
			$table->integer('kategori_nomor_id')->nullable();
			$table->integer('user_id')->nullable();
			$table->timestamps();
			$table->bigInteger('count')->nullable();
			$table->dateTime('tanggal')->nullable();
			$table->string('perihal')->nullable();
			$table->integer('used')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('penggunaan_nomors');
	}

}

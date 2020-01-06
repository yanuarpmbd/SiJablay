<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdvanceSptTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('advance_spt', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nomor_spt');
			$table->string('perihal');
			$table->string('tgl_spt');
			$table->string('user_id');
			$table->text('pelaksana', 65535);
			$table->timestamps();
			$table->string('spt_id');
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
		Schema::drop('advance_spt');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotulensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notulens', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('user_id');
			$table->string('tgl');
			$table->string('tempat');
			$table->string('acara');
			$table->string('pemimpin_rpt');
			$table->string('peserta');
			$table->text('hasil_rapat');
			$table->string('pengampu_keg_id');
			$table->string('notulis_id');
			$table->timestamps();
			$table->string('pukul');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('notulens');
	}

}

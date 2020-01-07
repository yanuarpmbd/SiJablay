<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKegiatanCrashesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kegiatan_crashes', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->string('bidang_id');
			$table->timestamps();
			$table->string('pesan');
			$table->integer('kegiatan_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kegiatan_crashes');
	}

}

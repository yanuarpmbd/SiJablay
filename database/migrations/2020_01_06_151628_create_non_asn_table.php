<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNonAsnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('non_asn', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->string('nama');
			$table->string('ttl');
			$table->string('alamat');
			$table->string('pendidikn');
			$table->string('unit_kerja');
			$table->string('nip');
			$table->string('gol');
			$table->string('jabatan');
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
		Schema::drop('non_asn');
	}

}

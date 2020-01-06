<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePLTModelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('p_l_t_models', function(Blueprint $table)
		{
			$table->integer('id')->unsigned();
			$table->string('data_asn_models_id');
			$table->timestamps();
			$table->string('gol_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('p_l_t_models');
	}

}

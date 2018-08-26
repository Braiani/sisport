<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePessoasPortariasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pessoas_portarias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('pessoa_id')->unsigned()->index('pessoas_portarias_pessoas_id_index');
			$table->integer('portaria_id')->unsigned()->index('pessoas_portarias_portarias_id_index');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pessoas_portarias');
	}

}

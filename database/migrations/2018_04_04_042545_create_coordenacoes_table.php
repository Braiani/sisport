<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoordenacoesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coordenacoes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('nome', 65535);
			$table->string('sigla', 10);
			$table->timestamps();
			$table->string('sigla_coordenacao')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('coordenacoes');
	}

}

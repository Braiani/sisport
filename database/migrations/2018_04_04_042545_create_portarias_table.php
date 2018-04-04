<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePortariasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('portarias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('port_num')->unique();
			$table->string('descricao');
			$table->date('data_emissao');
			$table->string('publicacao')->nullable();
			$table->date('vencimento')->nullable();
			$table->integer('periodicidades_id')->unsigned()->index();
			$table->integer('status_id')->unsigned()->index();
			$table->date('prev_renovacao')->nullable();
			$table->string('revoga_port')->nullable();
			$table->text('observacao', 65535)->nullable();
			$table->timestamps();
			$table->string('portaria_descricao')->nullable();
			$table->string('portaria_membro')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('portarias');
	}

}

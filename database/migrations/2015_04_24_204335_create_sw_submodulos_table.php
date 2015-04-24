<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSwSubmodulosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sw_submodulos', function(Blueprint $table)
		{
			$table->increments('smod_id');
			$table->integer ('smod_mod_id');
			$table->string('smod_nombre');
			$table->string('smod_ruta');
			$table->timestamp('smod_creado_en',30);
			$table->string('smod_creado_por');
			$table->timestamp('smod_modificado_en',30);
			$table->string('smod_modificado_por');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sw_submodulos');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCiudadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ciudades', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre', 90)->index('nombre');
			$table->integer('fk_paises')->unsigned()->index('FK_Ciudades_1');
			$table->string('region', 90);
			$table->float('latitude', 10, 0)->nullable();
			$table->float('longitude', 10, 0)->nullable();
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
		Schema::drop('ciudades');
	}

}

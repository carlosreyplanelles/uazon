<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGeoCiudadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('geo_ciudades', function(Blueprint $table)
		{
			$table->increments('id');
			$table->float('latitude', 10, 0);
			$table->float('longitude', 10, 0);
			$table->string('nombre', 45);
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
		Schema::drop('geo_ciudades');
	}

}

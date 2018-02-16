<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLibrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('libros', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('isbn')->unsigned();
			$table->float('voto', 10, 0);
			$table->integer('num_voto')->unsigned();
			$table->smallInteger('n_pags')->unsigned();
			$table->decimal('precio', 9)->unsigned();
			$table->string('titulo', 90)->index('titulo');
			$table->string('editorial', 90);
			$table->json('atributos_extra');
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
		Schema::drop('libros');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLibrosAutoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('libros_autores', function(Blueprint $table)
		{
            $table->integer('fk_libros')->unsigned()->index('FK_Libros_autores_1');
			$table->integer('fk_autores')->unsigned()->index('FK_Libros_autores_2');
			$table->date('fecha');
			$table->primary(['fk_libros','fk_autores']);
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
		Schema::drop('libros_autores');
	}

}

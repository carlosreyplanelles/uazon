<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLibrosAutoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('libros_autores', function(Blueprint $table)
		{
			$table->foreign('fk_libros', 'FK_Libros_autores_1')->references('id')->on('libros')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fk_autores', 'FK_Libros_autores_2')->references('id')->on('autores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('libros_autores', function(Blueprint $table)
		{
			$table->dropForeign('FK_Libros_autores_1');
			$table->dropForeign('FK_Libros_autores_2');
		});
	}

}

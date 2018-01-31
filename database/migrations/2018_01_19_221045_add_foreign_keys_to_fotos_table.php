<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fotos', function(Blueprint $table)
		{
			$table->foreign('fk_libros', 'FK_Fotos_1')->references('id')->on('libros')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fotos', function(Blueprint $table)
		{
			$table->dropForeign('FK_Fotos_1');
		});
	}

}

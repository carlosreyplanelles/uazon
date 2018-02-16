<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLibrosPedidosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('libros_pedidos', function(Blueprint $table)
		{
			$table->foreign('fk_libros', 'FK_Libros_pedidos_1')->references('id')->on('libros')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fk_pedidos', 'FK_libros_pedidos_2')->references('id')->on('pedidos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('libros_pedidos', function(Blueprint $table)
		{
			$table->dropForeign('FK_Libros_pedidos_1');
			$table->dropForeign('FK_libros_pedidos_2');
		});
	}

}

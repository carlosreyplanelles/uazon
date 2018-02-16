<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLibrosPedidosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('libros_pedidos', function(Blueprint $table)
		{
            $table->integer('fk_libros')->unsigned()->index('FK_libros_pedidos_1');
			$table->integer('fk_pedidos')->unsigned()->index('FK_libros_pedidos_2');
			$table->smallInteger('cantidad')->unsigned();
			$table->smallInteger('precio')->unsigned();
			$table->primary(['fk_libros','fk_pedidos']);
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
		Schema::drop('libros_pedidos');
	}

}

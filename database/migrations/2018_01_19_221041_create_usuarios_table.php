<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre', 90);
			$table->string('direccion', 90);
			$table->integer('cp')->unsigned();
			$table->string('email', 90);
			$table->enum('rol', array('administrador','comprador'));
			$table->string('contrasenya', 50)->comment('Contraseña por defecto para todos: 123456 codificada con SHA1. Contraseña para el usuario admin@admin.com: admin');
			$table->integer('fk_ciudades')->unsigned()->index('FK_Usuarios_1');
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
		Schema::drop('usuarios');
	}

}

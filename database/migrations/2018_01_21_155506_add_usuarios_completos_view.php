<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsuariosCompletosView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::statement('CREATE VIEW `usuarios_completos`
AS SELECT
   `usuarios`.`id` AS `id`,
   `usuarios`.`nombre` AS `nombre`,
   `usuarios`.`direccion` AS `direccion`,
   `usuarios`.`cp` AS `cp`,
   `usuarios`.`email` AS `email`,
   `usuarios`.`rol` AS `rol`,
   `usuarios`.`contrasenya` AS `contrasenya`,
   `usuarios`.`fk_ciudades` AS `fk_ciudades`,
   `ciudades`.`nombre` AS `ciudad`,
   `paises`.`nombre` AS `pais`
FROM ((`usuarios` left join `ciudades` on((`ciudades`.`id` = `usuarios`.`fk_ciudades`))) left join `paises` on((`paises`.`id` = `ciudades`.`fk_paises`)))');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::statement('DROP VIEW usuarios_completos');

    }
}

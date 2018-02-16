<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPedidosCompletosView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        \DB::statement('CREATE VIEW `pedidos_completos`
AS SELECT
   `p`.`id` AS `id`,
   `p`.`total` AS `total`,
   `p`.`fecha` AS `fecha`,
   `p`.`fk_usuarios` AS `fk_usuarios`,
   `p`.`pagado` AS `pagado`,
   `lp`.`fk_libros` AS `fk_libros`,
   `lp`.`fk_pedidos` AS `fk_pedidos`,
   `lp`.`cantidad` AS `cantidad`,
   `lp`.`precio` AS `precio`,
   `l`.`titulo` AS `titulo`,
   `l`.`isbn` AS `isbn`
FROM ((`pedidos` `p` left join `libros_pedidos` `lp` on((`lp`.`fk_pedidos` = `p`.`id`))) left join `libros` `l` on((`lp`.`fk_libros` = `l`.`id`)))');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::statement('DROP VIEW pedidos_completos');
    }
}

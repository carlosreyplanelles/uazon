<?php

use Illuminate\Database\Seeder;

class PedidosTableSeeder extends Seeder
{

    /**
     *
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pedidos')->delete();
        
        \DB::table('pedidos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'total' => 36,
                'fecha' => '2007-09-26 00:00:00',
                'fk_usuarios' => 3,
                'pagado' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'total' => 61,
                'fecha' => '2007-10-01 00:00:00',
                'fk_usuarios' => 5,
                'pagado' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'total' => 140,
                'fecha' => '2007-10-10 00:00:00',
                'fk_usuarios' => 7,
                'pagado' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'total' => 195,
                'fecha' => '2007-10-18 00:00:00',
                'fk_usuarios' => 9,
                'pagado' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'total' => 100,
                'fecha' => '2018-10-01 00:00:00',
                'fk_usuarios' => 1,
                'pagado' => 1,
            ),
        ));
        
        
    }
}
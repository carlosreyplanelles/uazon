<?php

use Illuminate\Database\Seeder;

class LibrosPedidosTableSeeder extends Seeder
{

    /**
     *
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('libros_pedidos')->delete();
        
        \DB::table('libros_pedidos')->insert(array (
            0 => 
            array (
                'fk_libros' => 1,
                'fk_pedidos' => 1,
                'cantidad' => 1,
                'precio' => 22,
            ),
            1 => 
            array (
                'fk_libros' => 1,
                'fk_pedidos' => 4,
                'cantidad' => 5,
                'precio' => 110,
            ),
            2 => 
            array (
                'fk_libros' => 1,
                'fk_pedidos' => 5,
                'cantidad' => 1,
                'precio' => 75,
            ),
            3 => 
            array (
                'fk_libros' => 2,
                'fk_pedidos' => 1,
                'cantidad' => 2,
                'precio' => 14,
            ),
            4 => 
            array (
                'fk_libros' => 2,
                'fk_pedidos' => 3,
                'cantidad' => 20,
                'precio' => 140,
            ),
            5 => 
            array (
                'fk_libros' => 2,
                'fk_pedidos' => 5,
                'cantidad' => 1,
                'precio' => 25,
            ),
            6 => 
            array (
                'fk_libros' => 3,
                'fk_pedidos' => 2,
                'cantidad' => 3,
                'precio' => 27,
            ),
            7 => 
            array (
                'fk_libros' => 4,
                'fk_pedidos' => 2,
                'cantidad' => 2,
                'precio' => 34,
            ),
            8 => 
            array (
                'fk_libros' => 4,
                'fk_pedidos' => 4,
                'cantidad' => 5,
                'precio' => 85,
            ),
        ));
        
        
    }
}
<?php

use Illuminate\Database\Seeder;

class AutoresTableSeeder extends Seeder
{

    /**
     *
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('autores')->delete();
        
        \DB::table('autores')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Stephen King',
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Mario Vargas Llosa',
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Leo Tolstoy',
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Jorge Bucay',
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'Charles Dickens',
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => 'Mary Shelley',
            ),
            6 => 
            array (
                'id' => 7,
                'nombre' => 'Lewis Carrol',
            ),
        ));
        
        
    }
}
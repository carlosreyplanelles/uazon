<?php

use Illuminate\Database\Seeder;

class FotosTableSeeder extends Seeder
{

    /**
     *
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fotos')->delete();

        \DB::table('fotos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'fk_libros' => 1,
                'orden' => 1,
                'path_foto' => '1.jpg',
            ),
            1 => 
            array (
                'id' => 2,
                'fk_libros' => 1,
                'orden' => 2,
                'path_foto' => '2.jpg',
            ),
            2 => 
            array (
                'id' => 3,
                'fk_libros' => 1,
                'orden' => 3,
                'path_foto' => '3.jpg',
            ),
            3 => 
            array (
                'id' => 4,
                'fk_libros' => 1,
                'orden' => 4,
                'path_foto' => '4.jpg',
            ),
            4 => 
            array (
                'id' => 5,
                'fk_libros' => 2,
                'orden' => 1,
                'path_foto' => '5.jpg',
            ),
            5 => 
            array (
                'id' => 6,
                'fk_libros' => 2,
                'orden' => 2,
                'path_foto' => '6.jpg',
            ),
            6 => 
            array (
                'id' => 7,
                'fk_libros' => 2,
                'orden' => 3,
                'path_foto' => '7.jpg',
            ),
            7 => 
            array (
                'id' => 8,
                'fk_libros' => 2,
                'orden' => 4,
                'path_foto' => '8.jpg',
            ),
            8 => 
            array (
                'id' => 9,
                'fk_libros' => 4,
                'orden' => 1,
                'path_foto' => '9.jpg',
            ),
            9 => 
            array (
                'id' => 10,
                'fk_libros' => 4,
                'orden' => 2,
                'path_foto' => '10.jpg',
            ),
            10 => 
            array (
                'id' => 11,
                'fk_libros' => 4,
                'orden' => 3,
                'path_foto' => '11.jpg',
            ),
            11 => 
            array (
                'id' => 12,
                'fk_libros' => 4,
                'orden' => 4,
                'path_foto' => '12.jpg',
            ),
            12 => 
            array (
                'id' => 13,
                'fk_libros' => 3,
                'orden' => 1,
                'path_foto' => '13.jpg',
            ),
            13 => 
            array (
                'id' => 14,
                'fk_libros' => 3,
                'orden' => 2,
                'path_foto' => '14.jpg',
            ),
            14 => 
            array (
                'id' => 15,
                'fk_libros' => 3,
                'orden' => 3,
                'path_foto' => '15.jpg',
            ),
            15 => 
            array (
                'id' => 16,
                'fk_libros' => 3,
                'orden' => 4,
                'path_foto' => '16.jpg',
            ),
        ));

        
    }
}
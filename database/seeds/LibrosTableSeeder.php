<?php

use Illuminate\Database\Seeder;

class LibrosTableSeeder extends Seeder
{

    /**
     *
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('libros')->delete();
        
        \DB::table('libros')->insert(array (
            0 => 
            array (
                'id' => 1,
                'isbn' => 670894788,
                'voto' => 3.0,
                'num_voto' => 25,
                'n_pags' => 1759,
                'precio' => '22.00',
                'titulo' => 'Anna Karenina',
                'editorial' => 'Juventud',
                'atributos_extra' => '{"color": "rojo", "premios": ["planeta2012", "Nacional2011"], "material": "papel", "dimensiones_cm": {"alto": 10, "ancho": 5, "fondo": 1}}',
            ),
            1 => 
            array (
                'id' => 2,
                'isbn' => 393048470,
                'voto' => 4.0,
                'num_voto' => 136,
                'n_pags' => 130,
                'precio' => '7.00',
                'titulo' => 'Alice\'s Adventures in Wonderland',
                'editorial' => 'Dover Publications',
                'atributos_extra' => 'null',
            ),
            2 => 
            array (
                'id' => 3,
                'isbn' => 141439742,
                'voto' => 3.0,
                'num_voto' => 92,
                'n_pags' => 789,
                'precio' => '17.00',
                'titulo' => 'Oliver Twist',
                'editorial' => 'Anaya',
                'atributos_extra' => 'null',
            ),
            3 => 
            array (
                'id' => 4,
                'isbn' => 743487583,
                'voto' => 5.0,
                'num_voto' => 63,
                'n_pags' => 345,
                'precio' => '9.00',
                'titulo' => 'Frankenstein',
                'editorial' => 'Anaya',
                'atributos_extra' => 'null',
            ),
        ));
        
        
    }
}
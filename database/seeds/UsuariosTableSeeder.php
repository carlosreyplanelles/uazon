<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{

    /**
     *
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('usuarios')->delete();
        
        \DB::table('usuarios')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Miguel Muñoz Martínez',
                'direccion' => 'Calle San Nicolás',
                'cp' => 30005,
                'email' => 'mke_mar72@ono.com',
                'rol' => 'comprador',
                'contrasenya' => '7c4a8d09ca3762af61e59520943dc26494f8941b',
                'fk_ciudades' => 661,
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Francisco Rubio Blancas',
                'direccion' => 'Alfara del Patriarca',
                'cp' => 46025,
                'email' => 'framer@gmail.com',
                'rol' => 'comprador',
                'contrasenya' => '7c4a8d09ca3762af61e59520943dc26494f8941b',
                'fk_ciudades' => 655,
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Rebeca Soler Sanchis',
                'direccion' => 'Calle de fuenlabrada',
                'cp' => 28019,
                'email' => 'rebsan19@hotmail.com',
                'rol' => 'comprador',
                'contrasenya' => '7c4a8d09ca3762af61e59520943dc26494f8941b',
                'fk_ciudades' => 653,
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Merce Roig Navarro',
                'direccion' => 'Calle Santa Eulalia',
                'cp' => 8012,
                'email' => 'merce76@yahoo.es',
                'rol' => 'comprador',
                'contrasenya' => '7c4a8d09ca3762af61e59520943dc26494f8941b',
                'fk_ciudades' => 654,
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'Silvia Villacampa Martín',
                'direccion' => 'Calle del Coso',
                'cp' => 50004,
                'email' => 'silvia_villacampa@gmail.com',
                'rol' => 'comprador',
                'contrasenya' => '7c4a8d09ca3762af61e59520943dc26494f8941b',
                'fk_ciudades' => 657,
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => 'Patricia Lorca Cantó',
                'direccion' => 'Avenida de Andalucia ',
                'cp' => 3804,
                'email' => 'patdomar@ono.com',
                'rol' => 'comprador',
                'contrasenya' => '7c4a8d09ca3762af61e59520943dc26494f8941b',
                'fk_ciudades' => 666,
            ),
            6 => 
            array (
                'id' => 7,
                'nombre' => 'Manuel Hernandez Molina',
                'direccion' => 'Calle de Hernan Cortés',
                'cp' => 2005,
                'email' => 'manu72@hotmail.com',
                'rol' => 'comprador',
                'contrasenya' => '7c4a8d09ca3762af61e59520943dc26494f8941b',
                'fk_ciudades' => 690,
            ),
            7 => 
            array (
                'id' => 8,
                'nombre' => 'Pablo Sanchez García',
                'direccion' => 'Calle de Santander',
                'cp' => 9004,
                'email' => 'mnar_der@yahoo.es',
                'rol' => 'comprador',
                'contrasenya' => '7c4a8d09ca3762af61e59520943dc26494f8941b',
                'fk_ciudades' => 688,
            ),
            8 => 
            array (
                'id' => 9,
                'nombre' => 'Carlos López Blanes',
                'direccion' => 'Avenida de Jaime I',
                'cp' => 12560,
                'email' => 'lets@ozu.es',
                'rol' => 'comprador',
                'contrasenya' => '7c4a8d09ca3762af61e59520943dc26494f8941b',
                'fk_ciudades' => 696,
            ),
            9 => 
            array (
                'id' => 10,
                'nombre' => 'Vanesa Romero Gonzalez',
                'direccion' => 'Paseo de la Estación',
                'cp' => 23150,
                'email' => 'vaner_gon@gmail.com',
                'rol' => 'comprador',
                'contrasenya' => '7c4a8d09ca3762af61e59520943dc26494f8941b',
                'fk_ciudades' => 703,
            ),
            10 => 
            array (
                'id' => 11,
                'nombre' => 'Administrador',
                'direccion' => 'C/ Administracion',
                'cp' => 12345,
                'email' => 'admin@admin.com',
                'rol' => 'administrador',
                'contrasenya' => 'd033e22ae348aeb5660fc2140aec35850c4da997',
                'fk_ciudades' => 5,
            ),
        ));
        
        
    }
}
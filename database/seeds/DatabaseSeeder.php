<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Schema::disableForeignKeyConstraints();
        // $this->call(UsersTableSeeder::class);
        $this->call(CiudadesTableSeeder::class);
        $this->call(AutoresTableSeeder::class);
        $this->call(ComentariosTableSeeder::class);
        $this->call(FotosTableSeeder::class);
        $this->call(GeoCiudadesTableSeeder::class);
        $this->call(LibrosTableSeeder::class);
        $this->call(LibrosAutoresTableSeeder::class);
        $this->call(LibrosPedidosTableSeeder::class);
        $this->call(PedidosTableSeeder::class);
        $this->call(PaisesTableSeeder::class);
        $this->call(UsuariosTableSeeder::class);
        \Schema::enableForeignKeyConstraints();
    }
}

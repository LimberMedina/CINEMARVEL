<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Asegúrate de importar la clase DB

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertar datos en la tabla users
        DB::table('users')->insert([
            'name' => 'Elias Quino',
            'email' => 'elias@example.com',
            'password' => bcrypt('12345678'), // Asegúrate de usar bcrypt para cifrar la contraseña
            'role' => 'cliente', // Cambia el rol según sea necesario
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Puedes añadir más usuarios aquí si lo deseas
        DB::table('users')->insert([
            'name' => 'Juan Perez',
            'email' => 'juan@example.com',
            'password' => bcrypt('12345678'),
            'role' => 'administrador', // Este es un usuario cliente
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}


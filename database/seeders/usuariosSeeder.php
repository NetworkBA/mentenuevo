<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class usuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
            'id_tipo'=>1
        ]);
        
        DB::table('users')->insert([
            'name' => 'Especialista1',
            'email' => 'especialista@mail.com',
            'password' => Hash::make('password'),
            'id_tipo'=>2
        ]);
        
        DB::table('users')->insert([
            'name' => 'Paciente1',
            'email' => 'paciente1@mail.com',
            'password' => Hash::make('password'),
            'id_tipo'=>3
        ]);
        
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tipoUsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('tipo_usuarios')->insert([
            'tipo' => 'Administrador',
        ]);

        DB::table('tipo_usuarios')->insert([
            'tipo' => 'Especialista',
        ]);

        DB::table('tipo_usuarios')->insert([
            'tipo' => 'Paciente',
        ]);

    }

}

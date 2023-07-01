<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->truncate();

        DB::table('roles')->insert([
            ['nome' => 'Administrador', 'display_name' => 'Admin', 'descricao' => 'administrador do sistema'],
            ['nome' => 'Gestor', 'display_name' => 'Gestor', 'descricao' => 'Gestor do sistema'],

        ]);

    }
}

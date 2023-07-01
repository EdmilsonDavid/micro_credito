<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('permissions')->truncate();
        DB::table('permissions')->insert([

            //Administrador
            ['id' => 1, 'nome' => 'show_dashboard', 'display_name' => 'Gerir Dashboard', 'descricao' => 'Manage Dashboard', 'categoria' => 'Dashboard'],
            ['id' => 2, 'nome' => 'Aprovação_de_empréstimos', 'display_name' => 'Aprovação de empréstimos', 'descricao' => 'Aprovação de empréstimos', 'categoria'=> 'Clientes'],

            // Gestor
            ['id' => 3, 'nome' => 'list_facturas', 'display_name'=> 'List facturas', 'descricao' => 'List facturas', 'categoria'=> 'Facturas'],
            ['id' => 4, 'nome' => 'list_minhas_facturas', 'display_name'=> 'List facturas dos clientes', 'descricao' => 'List facturas dos clientes', 'categoria'=> 'Clientes'],

        



        ]);
    }

}

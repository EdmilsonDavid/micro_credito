<?php

use Illuminate\Database\Seeder;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->truncate();
        // DB::table('model_import_clientes')->truncate();


        $user = array(
            'email' => 'demo@n3.co.mz',
            'password'=> '$2y$10$GbgX0Z2DGHOJIWAkFbkXaOPGH1Fu8QBqktctseholx3RLlKHGM/Y6',
            'nome' => 'Admin',
            'real_nome' => 'Admin',
            'telefone' => '841234567',
            'role_id' => 1,
            'registado_por' => 1,
            'remember_token'=>'XbPj4olmc87dlLBoQL2e3v9LJc23EEnoRAI5Pfv8MnGEUFq0ZYpaZAd5JuaW'
        );

        // $clientes = array(
        //     'nome'              => 'nome',
        //     'email'             => 'email',
        //     'telefone'          => 'telefone',
        //     'endereco'          => 'Bairro, Quarteirao, Casa',
        //     'nuit'              => 'nuit',
        //     'leitura_em_metros' => 'ultima leitura',
        //     'numero'            => 'codigo',
        //     'categoria'            => 'categoria',
        // );

        DB::table('users')->insert($user);
        // DB::table('model_import_clientes')->insert($clientes);


    }
}

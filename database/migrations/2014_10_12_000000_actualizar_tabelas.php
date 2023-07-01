<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ActualizarTabelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        if (Schema::hasTable('users')) {} else {
            Schema::create('users', function (Blueprint $table) {
                // $table->id();
                $table->increments('id');
                $table->string('nome', 100);
                $table->string('email', 100)->unique();
                $table->string('real_nome', 100);
                $table->string('password')->nullable();

                $table->string('telefone', 30)->nullable();
                $table->date('nascimento')->nullable();
                $table->string('fotografia', 50)->default('perfil.png');
               
                $table->string('estado')->default('activo');
                $table->string('sexo')->default('masculino');

                $table->integer('role_id')->nullable();
                $table->integer('localizacao_id')->nullable();
                $table->integer('provincia_id')->nullable();
                $table->string('cidade')->nullable();


                $table->integer('registado_por')->nullable();
                $table->integer('actualizado_por')->nullable();
                $table->rememberToken();
                $table->timestamps();
            });
        }

        if (Schema::hasTable('roles')) { } else {
            Schema::create('roles', function (Blueprint $table) {
                $table->increments('id');
                $table->string('display_name', 255)->nullable();
                $table->string('nome', 100);
                $table->string('descricao', 255)->nullable();
                $table->timestamps();
            });
        }

        if (Schema::hasTable('role_user')) { } else {
            Schema::create('role_user', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id');
                $table->integer('role_id');
                $table->timestamps();
            });
        }

        if (Schema::hasTable('permissions')) { } else {
            Schema::create('permissions', function (Blueprint $table) {
                $table->increments('id');
                $table->string('display_name', 255)->nullable();
                $table->string('nome', 100);
                $table->string('descricao', 255)->nullable();
                $table->string('categoria', 255)->nullable();
                $table->timestamps();
            });
        }

        if (Schema::hasTable('permission_role')) { } else {
            Schema::create('permission_role', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('permission_id');
                $table->integer('role_id');
                $table->timestamps();
            });
        }

        if(Schema::hasTable('clientes')) {} else {
            Schema::create('clientes', function (Blueprint $table){

                $table->increments('id');
                $table->string('codigo')->nullable();

            $table->string("nome_completo")->nullable();
            $table->string("data_de_nascimento")->nullable();
            $table->string("sexo")->nullable();
            $table->string("tipo_de_identificacao")->nullable();
            $table->string("numero_identificacao")->nullable();
            $table->string("local_emissao")->nullable();
            $table->date("data_emissao");
            $table->date("data_validade");
            $table->string("nuit")->nullable();
            $table->string("url_anexo_documento")->nullable();
            $table->string("localizacao")->nullable();
            $table->boolean("vive_em_arrendamento")->nullable()->default(false);
            $table->string("provincia_cliente")->nullable();
            $table->string("endereco_cliente")->nullable();
            $table->string("telefone_1_cliente")->nullable();
            $table->string("telefone_2_cliente")->nullable();
            $table->string("email_cliente")->nullable();
            $table->string("nome_pessoa_proxima")->nullable();
            $table->string("contacto_pessoa_proxima")->nullable();
            $table->string("informacao_pessoa_proxima")->nullable();
            $table->string("nome_da_empresa")->nullable();
            $table->string("morada_empresa")->nullable();
            $table->string("contacto_1_empresa")->nullable();
            $table->string("contacto_2_empresa")->nullable();
            $table->string("email_empresa")->nullable();
            $table->string("ocupacao_cargo")->nullable();
            $table->string("website_empresa")->nullable();
                $table->integer('registado_por')->nullable();
                $table->integer('actualizado_por')->nullable();

                $table->rememberToken();
                $table->timestamps();

            });
        }





    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

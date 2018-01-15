-<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){

        /*
        |--------------------
        | HelpPrompt Database
        |--------------------
        |
        | Nosso arquivo de banco de dados. Para migrar o banco de
        | dados, entre na linha de comando:
        |
        | php artisan migrate
        |
        | ---------------------
        |
        | A sintaxe é bem simples
        |
        | <MÉTODOS>
        |
        | increments(): Valor inteiro que é somado 1 a cada novo usuário;
        | float(): Valor com decimais;
        | string(): Uma cadeia de caracteres;
        | integer(): Valor inteiro;
        | date(): Campo reservado para data;
        | rememberToken(): Identificador único para o usuário para botão RememberMe;
        | timestamps(): Adiciona suporte baseado em data;
        |
        */

				Schema::create('usr_geo', function (Blueprint $table) {
            /*
            |-----
            | Geo
            |-----
            |
            | Tabela para a geografia do usuário.
            |
            | <Registros>
            |
            | lat: Latitude do usuário;
            | lon: Longitude do usuário;
            |
            | city: Cidade do usuário;
            | state: Estado do usuário;
            | country: Pais do usuário;
            |
            */

            $table->increments('id')->unsigned();
            $table->float('usr_lat');
            $table->float('usr_lon');
            $table->string('usr_cidade');
            $table->string('usr_estado');
            $table->string('usr_pais');
						$table->string('usr_bairro');
        });

				Schema::create('usr_login', function (Blueprint $table) {
            /*
            |--------
            | Users
            |--------
            | usr_ip:    Endereço Ipv4 do usuário;
            | usr_name:  Nome do usuário;
            | usr_pass:  Senha do usuário (md5 Crypyo);
            | usr_mail:  Email do usuário;
            | usr_cpf:   CPF do usuário;
            | usr_level: Nível de permissão do usuário;
            | usr_birth: Data de nascimento do usuário;
            |
            |
            | <Níveis de permissão>
            |
            | 0 - Nível de permissão máxima (Desenvolvedores);
            | 1 - Nível de permissão de Administradores (SysAdmins);
            | 2 - Nível de permissão de empresas;
            |
            */

						$table->increments('usr_id');
            $table->string		('usr_ip');
            $table->string		('usr_name')->unique();
            $table->string		('usr_pass', 191);
            $table->string		('usr_mail')->unique();
            $table->string		('usr_cpf', 13);
            $table->integer		('usr_level');
            $table->date			('usr_birth');
            $table->rememberToken();
						$table->timestamps();
			});
	}

    public function down(){
        Schema::drop('users');
        Schema::drop('geo');
    }
}

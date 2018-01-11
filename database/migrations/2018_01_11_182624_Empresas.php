<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			Schema::drop('estabelecimento');
					Schema::create('estabelecimento', function (Blueprint $table) {
						$table->string('estab_nome')->unique();
						$table->string('servico_tipo');
						$table->integer('estab_cep')->unsigned();
						$table->integer('estab_tel')->unsigned();
						$table->integer('veiculos')->unsigned();
					});



					Schema::drop('estab_geo');
					Schema::create('estab_geo', function (Blueprint $table) {
						$table->string('estab_estado');
						$table->string('estab_cidade');
						$table->string('estab_bairro');
						$table->string('estab_ender');
						$table->string('estab_numero');
						$table->string('estab_complement');
					});

					Schema::drop('contato_represen');
					Schema::create('contato_represen', function (Blueprint $table) {
						$table->string('represent_nome');
						$table->string('represent_email');
						$table->integer('represent_cel')->unsigned();
						$table->string('como_conheceu');
					});

					Schema::drop('trabalhe_conosco');
					Schema::create('trabalhe_conosco', function (Blueprint $table) {
						$table->increments('id')->unsigned();

						$table->string('estab_nome')->unique();
						$table->foreign('estab_nome')
									->references('estabelecimento')
									->on('estab_nome');

						$table->string('estab_serv');
						$table->foreign('estab_serv')
									->references('estabelecimento')
									->on('servico_tipo');

						$table->integer('estab_cep')->unsigned();
						$table->foreign('estab_cep')
									->references('estabelecimento')
									->on('estab_cep');

						$table->integer('estab_tel')->unsigned();
						$table->foreign('estab_tel')
									->references('estabelecimento')
									->on('estab_tel');

						$table->integer('estab_veic_num')->unsigned();
						$table->foreign('estab_veic_num')
									->references('estabelecimento')
									->on('veiculos');

						$table->string('estab_estado');
						$table->foreign('estab_estado')
									->references('estab_geo')
									->on('estab_estado');

						$table->string('estab_cidade');
						$table->foreign('estab_cidade')
									->references('estab_geo')
									->on('estab_cidade');


						$table->string('estab_bairro');
						$table->foreign('estab_bairro')
									->references('estab_geo')
									->on('estab_bairro');

						$table->string('estab_ender');
						$table->foreign('estab_ender')
									->references('estab_geo')
									->on('estab_ender');

						$table->string('estab_numero');
						$table->foreign('estab_numero')
									->references('estab_geo')
									->on('estab_numero');

						$table->string('estab_complement');
						$table->foreign('estab_complement')
									->references('estab_geo')
									->on('estab_complement');

						$table->string('represent_nome');
						$table->foreign('represent_nome')
									->references('contato_represen')
									->on('represent_nome');

						$table->string('represent_email');
						$table->foreign('represent_email')
									->references('contato_represen')
									->on('represent_email');

						$table->integer('represent_cel')->unsigned();
						$table->foreign('represent_cel')
									->references('contato_represen')
									->on('represent_cel');

						$table->string('como_conheceu');
						$table->foreign('como_conheceu')
									->references('contato_represen')
									->on('como_conheceu');
					});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
			Schema::drop('estabelecimento');
			Schema::drop('estab_geo');
			Schema::drop('contato_represen');
			Schema::drop('trabalhe_conosco');
    }
}

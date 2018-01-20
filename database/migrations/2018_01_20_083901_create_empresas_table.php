<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			Schema::create('empresa', function (Blueprint $table) {
				$table->increments('empresa_id')->unsigned();
				$table->string('empresa_nome');
				$table->integer('estabelecimentos')->unsigned();
				$table->string('tipo_servico', 191);
				$table->integer('telefones')->unsigned();
				$table->string('representante', 191);
				$table->string('estado', 191);
				$table->string('cidade', 191);
				$table->string('bairro', 191);
				$table->string('endereco', 191);
				$table->integer('veiculos')->unsigned();
				$table->integer('cep')->unsigned();
				$table->foreign('estabelecimentos')->references('estab_id')->on('estabelecimentos');
				$table->foreign('tipo_servico')->references('tipo_servico')->on('tipo_servicos');
				$table->foreign('telefones')->references('estab_tel')->on('telefones');
				$table->foreign('representante')->references('represent_nome')->on('represent_contatos');
				$table->foreign('estado')->references('estab_estado')->on('estab_estados');
				$table->foreign('cidade')->references('estab_cidade')->on('estab_cidades');
				$table->foreign('endereco')->references('estab_ender')->on('estab_enderecos');
				$table->foreign('veiculos')->references('veiculos')->on('veiculos');
				$table->foreign('cep')->references('estab_cep')->on('estab_ceps');
			});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}

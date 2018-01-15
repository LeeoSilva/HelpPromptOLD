<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empresas extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			Schema::create('estabelecimento', function (Blueprint $table) {
				$table->increments('estab_id')->unsigned();
			});

			Schema::create('estab_cep', function (Blueprint $table) {
				$table->integer('estab_cep')->unsigned();
				$table->integer('estab_id')->unsigned();
				$table->foreign('estab_id')
							->references('estab_id')
							->on('estabelecimento');
				$table->primary('estab_cep');
			});

			Schema::create('telefones', function (Blueprint $table) {
				$table->integer('estab_tel')->unsigned();
				$table->integer('estab_id')->unsigned();
				$table->foreign('estab_id')
							->references('estab_id')
							->on('estabelecimento');
				$table->primary('estab_tel');
			});

			Schema::create('tipo_servico', function (Blueprint $table) {
				$table->string('tipo_servico')->primary();
				$table->integer('estab_id')->unsigned();
				$table->foreign('estab_id')
							->references('estab_id')
							->on('estabelecimento');
			});

			Schema::create('veiculos', function (Blueprint $table) {
				$table->integer('veiculos')->unsigned();
				$table->primary('veiculos');

				$table->integer('motos')->unsigned();
				$table->integer('carros')->unsigned();
				$table->integer('guinchos')->unsigned();
				$table->integer('estab_id')->unsigned();
				$table->foreign('estab_id')
							->references('estab_id')
							->on('estabelecimento');
			});

			Schema::create('estab_estado', function (Blueprint $table) {
				$table->string('estab_estado')->primary();
				$table->integer('estab_id')->unsigned();
				$table->foreign('estab_id')
							->references('estab_id')
							->on('estabelecimento');
			});

			Schema::create('estab_cidade', function (Blueprint $table) {
				$table->string('estab_cidade')->primary();
				$table->integer('estab_id')->unsigned();
				$table->foreign('estab_id')
							->references('estab_id')
							->on('estabelecimento');
			});

			Schema::create('estab_bairro', function (Blueprint $table) {
				$table->string('estab_bairro')->primary();
				$table->integer('estab_id')->unsigned();
				$table->foreign('estab_id')
							->references('estab_id')
							->on('estabelecimento');
			});

			Schema::create('estab_ender', function (Blueprint $table) {
				$table->string('estab_ender')->primary();
				$table->string('estab_numero');
				$table->string('estab_complement');
				$table->integer('estab_id')->unsigned();
				$table->foreign('estab_id')
							->references('estab_id')
							->on('estabelecimento');
			});

			Schema::create('represent_contato', function (Blueprint $table) {
				$table->string('represent_nome')->primary();
				$table->string('represent_email');
				$table->integer('represent_cel')->unsigned();
				$table->string('como_conheceu');
				$table->integer('estab_id')->unsigned();
				$table->foreign('estab_id')
							->references('estab_id')
							->on('estabelecimento');
			});

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
				$table->foreign('estabelecimentos')->references('estab_id')->on('estabelecimento');
				$table->foreign('tipo_servico')->references('tipo_servico')->on('tipo_servico');
				$table->foreign('telefones')->references('estab_tel')->on('telefones');
				$table->foreign('representante')->references('represent_nome')->on('represent_contato');
				$table->foreign('estado')->references('estab_estado')->on('estab_estado');
				$table->foreign('cidade')->references('estab_cidade')->on('estab_cidade');
				$table->foreign('endereco')->references('estab_ender')->on('estab_ender');
				$table->foreign('veiculos')->references('veiculos')->on('veiculos');
				$table->foreign('cep')->references('estab_cep')->on('estab_cep');
			});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
			Schema::dropIfExists('estabelecimento');
			Schema::dropIfExists('estab_cep');
			Schema::dropIfExists('telefones');
			Schema::dropIfExists('tipo_servico');
			Schema::dropIfExists('veiculos');
			Schema::dropIfExists('estab_estado');
			Schema::dropIfExists('estab_cidade');
			Schema::dropIfExists('estab_bairro');
			Schema::dropIfExists('estab_ender');
			Schema::dropIfExists('represent_contato');
			Schema::dropIfExists('empresa');
	  }
}

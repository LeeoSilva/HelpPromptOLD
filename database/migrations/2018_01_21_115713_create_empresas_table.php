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
        Schema::create('empresas', function (Blueprint $table) {
					$table->increments('empresa_id')->unsigned();
					$table->string('empresa_nome', 191);
          $table->string('estab_email', 191);
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
					$table->foreign('estabelecimentos')->references('estab_id')->      on('estabelecimentos')->  onDelete('CASCADE');
          $table->foreign('estab_email')->     references('estab_email')->   on('estab_emails')->      onDelete('CASCADE');
					$table->foreign('tipo_servico')->    references('tipo_servico')->  on('tipo_servicos')->     onDelete('CASCADE');
					$table->foreign('telefones')->       references('estab_tel')->     on('telefones')->         onDelete('CASCADE');
					$table->foreign('representante')->   references('represent_nome')->on('represent_contatos')->onDelete('CASCADE');
					$table->foreign('estado')->          references('estab_estado')->  on('estab_estados')->     onDelete('CASCADE');
					$table->foreign('cidade')->          references('estab_cidade')->  on('estab_cidades')->     onDelete('CASCADE');
          $table->foreign('bairro')->          references('estab_bairro')->  on('estab_bairros')->     onDelete('CASCADE');
          $table->foreign('endereco')->        references('estab_ender')->   on('estab_enders')->      onDelete('CASCADE');
					$table->foreign('veiculos')->        references('veiculos')->      on('veiculos')->          onDelete('CASCADE');
          $table->foreign('cep')->             references('estab_cep')->     on('estab_ceps')->        onDelete('CASCADE');
					$table->timestamps();
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

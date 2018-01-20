<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepresentContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			Schema::create('represent_contato', function (Blueprint $table) {
				$table->string('represent_nome')->primary();
				$table->string('represent_email');
				$table->integer('represent_cel')->unsigned();
				$table->string('como_conheceu');
				$table->integer('estab_id')->unsigned();
				$table->foreign('estab_id')
							->references('estab_id')
							->on('estabelecimentos');
			});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('represent_contatos');
    }
}

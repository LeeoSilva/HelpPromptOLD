<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			Schema::create('veiculo', function (Blueprint $table) {
				$table->integer('veiculos')->unsigned();
				$table->primary('veiculos');

				$table->integer('motos')->unsigned();
				$table->integer('carros')->unsigned();
				$table->integer('guinchos')->unsigned();
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
        Schema::dropIfExists('veiculos');
    }
}

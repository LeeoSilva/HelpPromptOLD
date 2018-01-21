<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstabBairrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estab_bairros', function (Blueprint $table) {
					$table->string('estab_bairro')->primary();
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
        Schema::dropIfExists('estab_bairros');
    }
}

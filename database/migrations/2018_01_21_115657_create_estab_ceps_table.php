<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstabCepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estab_ceps', function (Blueprint $table) {
					$table->integer('estab_cep')->unsigned()->primary();
					$table->integer('estab_id')->unsigned();
					$table->foreign('estab_id')
								->references('estab_id')
								->on('estabelecimentos');
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
        Schema::dropIfExists('estab_ceps');
    }
}

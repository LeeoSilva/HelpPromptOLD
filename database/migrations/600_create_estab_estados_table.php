<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstabEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estab_estados', function (Blueprint $table) {
					$table->string('estab_estado')->primary();
					$table->integer('estab_id')->unsigned();
					$table->foreign('estab_id')
								->references('estab_id')
								->on('estabelecimentos')
								->onDelete('CASCADE');
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
        Schema::dropIfExists('estab_estados');
    }
}

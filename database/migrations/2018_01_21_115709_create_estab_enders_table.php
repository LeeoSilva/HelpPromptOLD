<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstabEndersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estab_enders', function (Blueprint $table) {
					$table->string('estab_ender')->primary();
					$table->string('estab_numero');
					$table->string('estab_complement');
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
        Schema::dropIfExists('estab_enders');
    }
}

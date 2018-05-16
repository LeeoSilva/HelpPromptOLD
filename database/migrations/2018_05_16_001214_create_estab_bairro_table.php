<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstabBairroTable extends Migration
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
        Schema::table('estab_bairros', function (Blueprint $table) {
            Schema::dropIfExists('estab_bairros');
        });
    }
}

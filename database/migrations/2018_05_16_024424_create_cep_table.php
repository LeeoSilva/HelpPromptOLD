<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ceps', function (Blueprint $table) {
            $table->integer('estab_cep')->unsigned()->primary();
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
        Schema::table('ceps', function (Blueprint $table) {
            Schema::dropIfExists('estab_ceps');
        });
    }
}

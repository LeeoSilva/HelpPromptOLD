<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepresentContatoTable extends Migration
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
        Schema::table('represent_contato', function (Blueprint $table) {
            Schema::dropIfExists('represent_contato');
        });
    }
}

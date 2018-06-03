<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstabEmailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estab_emails', function (Blueprint $table) {
            $table->string('estab_email')->primary();
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
        Schema::table('estab_email', function (Blueprint $table) {
            Schema::drop('estab_emails');
        });
    }
}

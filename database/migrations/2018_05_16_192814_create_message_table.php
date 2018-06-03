<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments("messages_id");
            $table->string("usuario");
            $table->integer("telefone");
            $table->string("email");
            $table->string("mensagem");
            $table->foreign("usuario")  ->references('usr_name')->on('logins')->onDelete('CASCADE');
            $table->foreign("email")    ->references('usr_mail')->on('emails')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
            Schema::dropIfExists('messages');
        });
    }
}

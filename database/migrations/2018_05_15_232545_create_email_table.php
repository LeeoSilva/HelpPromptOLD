<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
                    $table->string('usr_mail', 191)->primary();
					$table->string('usr_name');
					$table->foreign('usr_name')->references('usr_name')->on('logins')->onDelete('CASCADE');
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
        Schema::table('emails', function (Blueprint $table) {
            Schema::dropIfExists('emails');
        });
    }
}

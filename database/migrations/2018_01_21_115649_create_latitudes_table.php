<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLatitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('latitudes', function (Blueprint $table) {
					$table->double('usr_lat')->primary();
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
        Schema::dropIfExists('latitudes');
    }
}

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
			Schema::create('latitude', function (Blueprint $table){
				$table->float('usr_lat')->primary();
				$table->string('usr_name');
				$table->foreign('usr_name')->references('usr_name')->on('Login');
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

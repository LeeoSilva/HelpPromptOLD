<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLongitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			Schema::create('longitude', function (Blueprint $table){
				$table->float('usr_lon')->primary();
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
        Schema::dropIfExists('longitudes');
    }
}

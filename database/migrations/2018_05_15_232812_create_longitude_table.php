<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLongitudeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('longitudes', function (Blueprint $table) {
            $table->double('usr_lon')->primary();
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
        Schema::table('longitudes', function (Blueprint $table) {
            Schema::dropIfExists('longitudes');
        });
    }
}

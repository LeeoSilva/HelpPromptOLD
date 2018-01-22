<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
					$table->increments('usr_id')->unsigned();
					$table->string    ('usr_ip');
					$table->string    ('usr_name');
					$table->string    ('usr_mail');
					$table->float     ('usr_lat');
					$table->float     ('usr_lon');
					$table->integer		('usr_level')->unsigned();
					$table->integer		('usr_cpf')->unsigned();
					$table->foreign   ('usr_ip')->references('usr_ip')->on('ips')->onDelete('CASCADE');
					$table->foreign   ('usr_name')->references('usr_name')->on('logins')->onDelete('CASCADE');
					$table->foreign		('usr_mail')->references('usr_mail')->on('emails')->onDelete('CASCADE');
					$table->foreign		('usr_lat')->references('usr_lat')->on('latitudes')->onDelete('CASCADE');
					$table->foreign		('usr_lon')->references('usr_lon')->on('longitudes')->onDelete('CASCADE');
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
        Schema::dropIfExists('users');
    }
}

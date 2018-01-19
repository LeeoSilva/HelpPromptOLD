<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
			Schema::create('Login', function (Blueprint $table){
				$table->string('usr_name', 191)->primary();
				$table->string('usr_pass', 191);
				$table->date('usr_birth');
			});

			Schema::create('Emails', function (Blueprint $table){
				$table->string('usr_mail', 191)->primary();
				$table->string('usr_name');
				$table->foreign('usr_name')->references('usr_name')->on('Login');
			});

			Schema::create('IP', function (Blueprint $table){
				$table->string('usr_ip')->primary();
				$table->string('usr_name');
				$table->foreign('usr_name')->references('usr_name')->on('Login');
			});

			Schema::create('Latitude', function (Blueprint $table){
				$table->float('usr_lat')->primary();
				$table->string('usr_name');
				$table->foreign('usr_name')->references('usr_name')->on('Login');
			});

			Schema::create('Longitude', function (Blueprint $table){
				$table->float('usr_lon')->primary();
				$table->string('usr_name');
				$table->foreign('usr_name')->references('usr_name')->on('Login');
			});

			Schema::create('Users', function (Blueprint $table){
				$table->increments('usr_id')->unsigned();
				$table->string    ('usr_ip');
				$table->string    ('usr_name');
				$table->string    ('usr_mail');
				$table->float     ('usr_lat');
				$table->float     ('usr_lon');
				$table->integer		('usr_level')->unsigned();
				$table->integer		('usr_cpf')->unsigned();
				$table->foreign   ('usr_ip')->references('usr_ip')->on('IP');
				$table->foreign   ('usr_name')->references('usr_name')->on('Login');
				$table->foreign		('usr_mail')->references('usr_mail')->on('Emails');
				$table->foreign		('usr_lat')->references('usr_lat')->on('Latitude');
				$table->foreign		('usr_lon')->references('usr_lon')->on('Longitude');
			});

		}

		public function down(){
			//Schema::dropIfExists('Login');
			//Schema::dropIfExists('Emails');
			//Schema::dropIfExists('IP');
			//Schema::dropIfExists('Latitude');
			//Schema::dropIfExists('Longitude');
			//Schema::dropIfExists('Users');
		}
}

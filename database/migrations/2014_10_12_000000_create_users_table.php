<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id_user');
			$table->string('first_name');
            $table->string('last_name');
            $table->string('password', 60);
            $table->string('email')->unique();
            $table->boolean('sex');
            $table->dateTime('birthdate');
            $table->boolean('status')->default(true);
            $table->rememberToken();
            $table->integer('id_type')->unsigned();
            $table->timestamps();

            $table->foreign('id_type')->references('id_type')->on('type_user');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}

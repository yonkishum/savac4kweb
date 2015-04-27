<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserWordTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_word', function(Blueprint $table)
		{
			$table->increments('id_user_word');

            $table->integer('user_id')->unsigned();
            $table->integer('word_id')->unsigned();

            /*$table->foreign('user_id')
                ->references('id_user_word')
                ->on('users');

            $table->foreign('word_id')
                ->references('id_user_word')
                ->on('words');*/

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
		Schema::drop('user_word');
	}

}

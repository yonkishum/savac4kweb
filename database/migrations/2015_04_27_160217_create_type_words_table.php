<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeWordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('type_words', function(Blueprint $table)
		{
			$table->increments('id');

            $table->integer('word_id')->unsigned();
            $table->string('name_type');
			$table->timestamps();

			$table->foreign('word_id')
				->references('id')
				->on('words');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('type_words');
	}

}

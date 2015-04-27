<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('type_user', function(Blueprint $table)
		{
			$table->increments('id_type');
            $table->string('type');
            $table->timestamps();

            /*$table->foreign('id_type')
                ->references('id_type')
                ->on('users');*/

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('type_user');
	}

}

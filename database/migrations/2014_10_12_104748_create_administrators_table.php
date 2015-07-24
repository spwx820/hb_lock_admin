<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdministratorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('administrators', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username', 190)->unique();
			$table->string('password', 60);
			$table->string('name');
			$table->string('remember_token', 100)->nullable();

			$table->integer('p1');
			$table->integer('p2');
			$table->integer('p3');
			$table->integer('p4');

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
		Schema::drop('administrators');
	}

}

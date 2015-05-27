<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiftShopsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gift_shops', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('tittle');
			$table->string('description');
			$table->string('image',900);
			$table->integer('price');
			$table->integer('existence');
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
		Schema::drop('gift_shops');
	}

}

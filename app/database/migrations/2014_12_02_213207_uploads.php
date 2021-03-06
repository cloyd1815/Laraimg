<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Uploads extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uploads', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->string('file_name');
			$table->integer('visibility');
			$table->string('uploader_ip');
			$table->dateTime('expiration');
			$table->string('img_name', 32);
			$table->string('img_desc', 150);
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
		Schema::drop('uploads');
	}

}

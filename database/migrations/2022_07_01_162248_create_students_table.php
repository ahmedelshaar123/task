<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentsTable extends Migration {

	public function up()
	{
		Schema::create('students', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('first_name');
			$table->string('second_name');
			$table->string('third_name');
			$table->string('email')->unique();
		});
	}

	public function down()
	{
		Schema::drop('students');
	}
}
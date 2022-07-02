<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGradesTable extends Migration {

	public function up()
	{
		Schema::create('grades', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('grade');
			$table->integer('seating_number')->unique();
			$table->integer('student_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('grades');
	}
}
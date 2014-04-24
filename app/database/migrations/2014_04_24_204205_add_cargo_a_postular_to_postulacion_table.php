<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCargoAPostularToPostulacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('postulaciones', function(Blueprint $table)
		{
			//
                    $table->string('cargo_a_postular', 255);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('postulaciones', function(Blueprint $table)
		{
			//
                    $table->dropColumn('cargo_a_postular');
		});
	}

}

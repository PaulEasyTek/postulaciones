<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostulacionesTable extends Migration {

	public function up()
	{
		Schema::create('postulaciones', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nombre', 255);
			$table->string('apellidos', 255);
			$table->string('email', 255);
			$table->string('repo_url', 512);
			$table->string('linkedin_url', 512);
			$table->text('respuesta_desafio');
		});
	}

	public function down()
	{
		Schema::drop('postulaciones');
	}
}
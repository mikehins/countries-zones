<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZonesTable extends Migration
{
	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('zones', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('country_id')->unsigned();
			$table->string('name');
			$table->string('code', 32)->nullable();
			
			$table->foreign('country_id')->references('id')->on('countries');
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('zones');
	}
	
}
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entries', function(Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->integer('hour');
            $table->date('pre')->nullable();
            $table->date('estimated')->nullable();
            $table->date('accepted')->nullable();
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->date('mainte')->nullable();
            $table->text('status');
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
		Schema::drop('entries');
	}

}

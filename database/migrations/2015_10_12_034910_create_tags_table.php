<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
    {
		Schema::create('tags', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
        });

		Schema::create('issue_tag', function (Blueprint $table) {
			$table->integer('issue_id')->unsigned()->index();
			$table->foreign('issue_id')->references('id')->on('system_issues')->onDelete('cascade');
			$table->integer('tag_id')->unsigned()->index();
			$table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
		});
    }

	/**
     * Reverse the migrations.
     *
     * @return void
     */
	public function down()
	{
		Schema::drop('tags');
		Schema::drop('issue_tag');
    }
}

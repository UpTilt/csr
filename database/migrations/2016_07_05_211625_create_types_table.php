<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->increments('id');
            $table->float('weight');
            $table->integer('group_id')->unsigned();
            $table->integer('label_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('types', function(Blueprint $table) {
            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('label_id')->references('id')->on('labels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('types');
    }
}

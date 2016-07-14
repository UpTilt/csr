<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDowntimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('downtime', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('reason_id')->unsigned();
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->float('duration');
            $table->text('notes');
            $table->timestamps();
        });

        Schema::table('downtime', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('reason_id')->references('id')->on('reasons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('downtime');
    }
}

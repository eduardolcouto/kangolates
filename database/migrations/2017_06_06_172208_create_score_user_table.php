<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoreUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score_user', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('schedule_user_id')
                ->unsigned()
                ->references('id')
                ->on('schedule_users');

            $table->integer('score_id')
                ->unsigned()
                ->references('id')
                ->on('scores');


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
        Schema::dropIfExists('score_user');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workouts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('describe');
            $table->integer('modality_id')
                  ->unsigned()
                  ->references('id')
                  ->on('modalities');
            $table->integer('messure_type_id')
                ->unsigned()
                ->references('id')
                ->on('messure_types');

            $table->float('value_rx')->nullable();
            $table->float('value_r')->nullable();
            $table->float('value')->nullable();
            $table->integer('sets')->nullable();
            $table->integer('reps')->nullable();

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
        Schema::dropIfExists('workouts');
    }
}

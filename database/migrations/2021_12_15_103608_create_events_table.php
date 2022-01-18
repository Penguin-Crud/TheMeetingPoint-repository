<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->boolean('showSlider')->default(false);
            $table->foreignId('user_id')->nullable()->default(null);
            $table->timestamps();
            $table->string('title');
            $table->string('image', 250);
            $table->string('description');
            $table->integer('people');
            $table->dateTime('date');
            // $table->time('time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}

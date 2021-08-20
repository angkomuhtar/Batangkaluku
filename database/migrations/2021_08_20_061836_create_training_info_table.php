<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_info', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title');
            $table->string('title_en')->nullable();
            $table->text('description')->nullable();
            $table->text('description_en')->nullable();
            $table->date('date');
            $table->string('time_start');
            $table->string('time_end')->nullable();
            $table->string('location')->nullable();
            $table->string('embed')->nullable();
            $table->boolean('is_active')->default(0);
            $table->unsignedInteger('user_create')->nullable();
            $table->unsignedInteger('user_update')->nullable();
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
        Schema::dropIfExists('training_info');
    }
}

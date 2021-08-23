<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title');
            $table->text('description');
            $table->text('content');
            $table->string('title_en')->nullable();
            $table->text('description_en')->nullable();
            $table->text('content_en')->nullable();
            $table->string('type');
            $table->string('source')->nullable();
            $table->string('creator')->nullable();
            $table->dateTime('published_time');
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
        Schema::dropIfExists('article');
    }
}

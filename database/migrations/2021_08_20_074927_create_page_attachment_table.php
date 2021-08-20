<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageAttachmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_attachment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->constrained('page');
            $table->string('name');
            $table->string('name_en')->nullable();
            $table->string('attachment');
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
        Schema::dropIfExists('page_attachment');
    }
}

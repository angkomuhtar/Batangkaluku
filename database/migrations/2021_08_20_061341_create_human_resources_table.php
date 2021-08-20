<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHumanResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('human_resources', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nip');
            $table->string('image');
            $table->foreignId('department_id')->constrained('department');
            $table->string('position');
            $table->string('position_en')->nullable();
            $table->unsignedInteger('level_id');
            $table->unsignedInteger('order_id');
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
        Schema::dropIfExists('human_resources');
    }
}

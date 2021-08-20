<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officer', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nip');
            $table->string('rank')->comment('pangkat / golongan');
            $table->string('rank_en')->nullable()->comment('pangkat / golongan');
            $table->string('position')->comment('jabatan');
            $table->string('position_en')->nullable()->comment('jabatan');
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
        Schema::dropIfExists('officer');
    }
}

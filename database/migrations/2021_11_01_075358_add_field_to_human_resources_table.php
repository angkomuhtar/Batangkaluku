<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldToHumanResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('human_resources', function (Blueprint $table) {
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('last_edu')->comment('pendidikan terakhir')->nullable();
            $table->string('univ')->comment('universitas/perguruan tinggi')->nullable();
            $table->string('major')->comment('jurusan')->nullable();
            $table->string('rank')->comment('pangkat/golongan')->nullable();
            $table->string('department')->comment('jabatan')->nullable();
            $table->string('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('human_resources', function (Blueprint $table) {
            //
        });
    }
}

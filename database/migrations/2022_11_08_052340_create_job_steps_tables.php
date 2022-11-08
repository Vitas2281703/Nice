<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobStepsTables extends Migration
{
    public function up()
    {
        Schema::create('job_steps', function (Blueprint $table) {
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
        });






    }

    public function down()
    {

        Schema::dropIfExists('job_steps');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkersTables extends Migration
{
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            createDefaultTableFields($table);

            $table->string('name', 30)->nullable();
            $table->text('post')->nullable();
            $table->text('education')->nullable();
        });






    }

    public function down()
    {

        Schema::dropIfExists('workers');
    }
}

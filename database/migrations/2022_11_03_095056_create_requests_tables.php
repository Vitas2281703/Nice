<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTables extends Migration
{
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->string('fio')->nullable();
            $table->string('email')->nullable();
            $table->char('phone', 11);
            $table->text('message');
            $table->char('status', 15)->default('Создан');
        });






    }

    public function down()
    {

        Schema::dropIfExists('requests');
    }
}

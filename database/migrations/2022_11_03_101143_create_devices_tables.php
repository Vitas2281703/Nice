<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTables extends Migration
{
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->foreignId('fabricator_id')->nullable()->constrained()->restrictOnDelete();
            $table->foreignId('category_id')->nullable()->constrained()->restrictOnDelete();
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();

        });

    }

    public function down()
    {

        Schema::dropIfExists('devices');
    }
}

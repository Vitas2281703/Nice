<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTables extends Migration
{
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            createDefaultTableFields($table);

            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();

        });

        Schema::create('service_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'service');
        });


    }

    public function down()
    {

        Schema::dropIfExists('service_slugs');
        Schema::dropIfExists('services');
    }
}

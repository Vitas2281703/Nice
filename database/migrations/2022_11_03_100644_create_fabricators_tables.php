<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFabricatorsTables extends Migration
{
    public function up()
    {
        Schema::create('fabricators', function (Blueprint $table) {
           createDefaultTableFields($table);

           $table->string('title', 200)->nullable();


            $table->text('description')->nullable();

        });

        Schema::create('fabricator_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'fabricator');
        });


    }

    public function down()
    {

        Schema::dropIfExists('fabricator_slugs');
        Schema::dropIfExists('fabricators');
    }
}

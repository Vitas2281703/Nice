<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurClientsTables extends Migration
{
    public function up()
    {
        Schema::create('our_clients', function (Blueprint $table) {
            createDefaultTableFields($table);
            $table->string('name', 50)->nullable();
            $table->text('description')->nullable();
        });






    }

    public function down()
    {

        Schema::dropIfExists('our_clients');
    }
}

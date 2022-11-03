<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTables extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            $table->id('client_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreignId('role_id')->constrained()->restrictOnDelete();
            $table->rememberToken();

        });






    }

    public function down()
    {

        Schema::dropIfExists('users');
    }
}

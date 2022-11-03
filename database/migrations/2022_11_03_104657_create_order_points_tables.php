<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderPointsTables extends Migration
{
    public function up()
    {
        Schema::create('order_points', function (Blueprint $table) {
            createDefaultTableFields($table);
            $table->foreignId('order_id')->constrained()->restrictOnDelete();
            $table->foreignId('order_service_id')->constrained()->restrictOnDelete();
            $table->foreignId('user_id')->constrained()->restrictOnDelete();
            $table->integer('amount');
        });






    }

    public function down()
    {

        Schema::dropIfExists('order_points');
    }
}

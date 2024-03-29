<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderServicesTables extends Migration
{
    public function up()
    {
        Schema::create('order_services', function (Blueprint $table) {
            createDefaultTableFields($table);
            $table->foreignId('service_id')->nullable()->constrained()->restrictOnDelete();
            $table->foreignId('device_id')->nullable()->constrained()->restrictOnDelete();
            $table->foreignId('promotion_id')->nullable()->constrained()->restrictOnDelete();
            $table->integer('price')->nullable();
        });






    }

    public function down()
    {

        Schema::dropIfExists('order_services');
    }
}

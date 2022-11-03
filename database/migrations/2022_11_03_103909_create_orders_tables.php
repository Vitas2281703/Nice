<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTables extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            createDefaultTableFields($table);

            $table->string('fio', 100)->nullable();
            $table->text('description')->nullable();
            $table->char('status', 30)->default('Создан');
            $table->text('message')->nullable();
            $table->char('status_payment', 30)->default('Не оплачено');

        });






    }

    public function down()
    {

        Schema::dropIfExists('orders');
    }
}

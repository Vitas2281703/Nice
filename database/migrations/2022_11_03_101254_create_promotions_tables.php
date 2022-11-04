<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionsTables extends Migration
{
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            createDefaultTableFields($table, $publishDates = true);
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->integer('discount')->default(0);
        });

        Schema::create('promotion_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'promotion');
        });


    }

    public function down()
    {

        Schema::dropIfExists('promotion_slugs');
        Schema::dropIfExists('promotions');
    }
}

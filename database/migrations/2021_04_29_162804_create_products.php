<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('category_id')->nullable();
            $table->string('article')->nullable();
            $table->string('title')->nullable();
            $table->string('title_ua')->nullable();
            $table->string('title_en')->nullable();
            $table->text('short_description')->nullable();
            $table->text('short_description_ua')->nullable();
            $table->text('short_description_en')->nullable();
            $table->text('description')->nullable();
            $table->text('description_ua')->nullable();
            $table->text('description_en')->nullable();
            $table->string('picture')->nullable();
            $table->text('additional_pictures')->nullable();
            $table->string('video_url')->nullable();
            $table->text('composition')->nullable();
            $table->text('composition_ua')->nullable();
            $table->text('composition_en')->nullable();
            $table->tinyInteger('is_active')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

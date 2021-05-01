<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlides extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_ua')->nullable();
            $table->string('title_en')->nullable();
            $table->string('picture')->nullable();
            $table->string('url')->nullable();
            $table->string('url_ua')->nullable();
            $table->string('url_en')->nullable();
            $table->tinyInteger('is_active')->default(0);
            $table->string('priority')->nullable();
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
        Schema::dropIfExists('slides');
    }
}

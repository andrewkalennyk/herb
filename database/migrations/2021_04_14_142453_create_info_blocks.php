<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoBlocks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_blocks', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('tb_tree_id')->nullable();
            $table->string('template')->nullable();
            $table->string('title')->nullable();
            $table->string('title_ua')->nullable();
            $table->string('title_en')->nullable();
            $table->text('description')->nullable();
            $table->text('description_ua')->nullable();
            $table->text('description_en')->nullable();
            $table->string('picture')->nullable();
            $table->tinyInteger('is_active')->nullable();

            $table->timestamps();

            $table->foreign('tb_tree_id')->references('id')->on('tb_tree')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_blocks');
    }
}

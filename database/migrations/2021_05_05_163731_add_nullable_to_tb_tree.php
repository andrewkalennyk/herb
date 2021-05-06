<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddNullableToTbTree extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_tree', function (Blueprint $table) {
            $table->integer('depth')->nullable()->change();
            $table->text('description')->nullable()->change();
            $table->string('picture')->nullable()->change();
            $table->text('additional_pictures')->nullable()->change();
            $table->string('seo_title')->nullable()->change();
            $table->string('seo_description')->nullable()->change();
            $table->string('seo_keywords')->nullable()->change();
        });

        DB::statement("ALTER TABLE tb_tree MODIFY is_show_in_menu TINYINT UNSIGNED NULL");
        DB::statement("ALTER TABLE tb_tree MODIFY is_show_in_footer_menu TINYINT UNSIGNED NULL");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_tree', function (Blueprint $table) {
            //
        });
    }
}

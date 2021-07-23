<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->tinyInteger('is_sold_out')->after('is_active')->default(0);
            $table->tinyInteger('is_discount_fifty')->after('is_sold_out')->default(0);
            $table->string('vide_cover_image')->after('video_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('is_sold_out');
            $table->dropColumn('is_discount_fifty');
            $table->dropColumn('vide_cover_image');
        });
    }
}

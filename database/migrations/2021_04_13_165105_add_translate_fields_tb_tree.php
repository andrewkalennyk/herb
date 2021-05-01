<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTranslateFieldsTbTree extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_tree', function (Blueprint $table) {
            $table->string('title_ua')->nullable()->after('title');
            $table->string('title_en')->nullable()->after('title_ua');
            $table->string('description_ua')->nullable()->after('description');
            $table->string('description_en')->nullable()->after('description_ua');
            $table->string('seo_title_ua')->nullable()->after('seo_title');
            $table->string('seo_title_en')->nullable()->after('seo_title_ua');
            $table->string('seo_description_ua')->nullable()->after('seo_description');
            $table->string('seo_description_en')->nullable()->after('seo_description_ua');
            $table->string('seo_keywords_ua')->nullable()->after('seo_keywords');
            $table->string('seo_keywords_en')->nullable()->after('seo_keywords_ua');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_tree', function (Blueprint $table) {
            $table->dropColumn('title_ua');
            $table->dropColumn('title_en');
            $table->dropColumn('description_ua');
            $table->dropColumn('description_en');
            $table->dropColumn('seo_title_ua');
            $table->dropColumn('seo_title_en');
            $table->dropColumn('seo_description_ua');
            $table->dropColumn('seo_description_en');
            $table->dropColumn('seo_keywords_ua');
            $table->dropColumn('seo_keywords_en');
        });
    }
}

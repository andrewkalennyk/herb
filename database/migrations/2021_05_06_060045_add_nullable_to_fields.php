<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNullableToFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_tree', function (Blueprint $table) {

            DB::statement("ALTER TABLE tb_tree MODIFY is_active TINYINT UNSIGNED NULL");
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('image')->nullable()->change();
            $table->dateTime('last_login')->nullable()->change();
            // DB::statement("ALTER TABLE tb_tree MODIFY is_active TINYINT UNSIGNED NULL");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fields', function (Blueprint $table) {
            //
        });
    }
}

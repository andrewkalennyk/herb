<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNullableToFileds2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('image')->nullable()->change();
            $table->text('permissions')->nullable()->change();
            $table->dateTime('last_login')->nullable()->change();
        });

        Schema::table('activations', function (Blueprint $table) {
            $table->string('code')->nullable()->change();
            $table->dateTime('completed_at')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}

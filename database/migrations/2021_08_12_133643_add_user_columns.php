<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('patronymic_name')->after('last_name')->nullable();
            $table->string('phone')->after('email')->nullable();
            $table->date('date_birth')->after('phone')->nullable();
            $table->string('city')->after('date_birth')->nullable();
            $table->string('address')->after('city')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('patronymic_name');
            $table->dropColumn('phone');
            $table->dropColumn('date_birth');
            $table->dropColumn('city');
            $table->dropColumn('address');
        });
    }
}

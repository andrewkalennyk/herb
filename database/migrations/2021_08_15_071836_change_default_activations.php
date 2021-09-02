<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeDefaultActivations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('activations', function (Blueprint $table) {
            DB::statement('ALTER TABLE `activations` CHANGE COLUMN `completed` `completed` TINYINT(4) NOT NULL DEFAULT 0;');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('activations', function (Blueprint $table) {
            //
        });
    }
}

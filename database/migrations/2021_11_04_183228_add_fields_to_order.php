<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedInteger('np_region_id')->index()->nullable();
            $table->unsignedInteger('np_city_id')->index()->nullable();
            $table->unsignedInteger('np_warehouse_id')->index()->nullable();
            $table->unsignedInteger('np_street_id')->index()->nullable();
            $table->string('house')->nullable();

            $table->foreign('np_city_id')->references('id')->on('np_cities')->onDelete('restrict');
            $table->foreign('np_region_id')->references('id')->on('np_areas')->onDelete('restrict');
            $table->foreign('np_warehouse_id')->references('id')->on('np_warehouses')->onDelete('restrict');
            $table->foreign('np_street_id')->references('id')->on('np_streets')->onDelete('restrict');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNpWarehouses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('np_warehouses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('np_city_id')->index()->nullable();
            $table->unsignedInteger('np_warehouse_type_id')->index()->nullable();
            $table->string('title')->nullable();
            $table->string('title_ua')->nullable();
            $table->string('title_en')->nullable();
            $table->string('ref')->nullable();
            $table->tinyInteger('is_active')->nullable();
            $table->timestamps();

            $table->foreign('np_city_id')->references('id')->on('np_cities')->onDelete('restrict');
            $table->foreign('np_warehouse_type_id')->references('id')->on('np_warehouse_types')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('np_warehouses');
    }
}

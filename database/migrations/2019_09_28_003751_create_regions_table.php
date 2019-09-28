<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country_en');
            $table->string('region_en');
            $table->string('city_en');
            $table->string('country');
            $table->string('region');
            $table->string('city');
            $table->string('lat');
            $table->string('lang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     *
     *
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regions');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prop_abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('about_id')->unsigned();
            $table->enum('type', ['text','image', 'video'])->default('text');
            $table->longText('ValText')->nullable();
            $table->longText('path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prop__abouts');
    }
}

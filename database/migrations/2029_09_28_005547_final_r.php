<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FinalR extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('items', function (Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('cascade')->onUpdate('cascade');
            $table->foreign('region_id')->references('id')->on('regions')
                ->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('abouts', function (Blueprint $table) {
            $table->foreign('item_id')->references('id')->on('Items')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('prop_abouts', function (Blueprint $table) {
            $table->foreign('about_id')->references('id')->on('Abouts')
                ->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('cost_cards', function (Blueprint $table) {
            $table->foreign('item_id')->references('id')->on('items')
                ->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('item_id')->references('id')->on('items')
                ->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('reports', function(Blueprint $table) {
            $table->foreign('item_id')->references('id')->on('items')
                ->onDelete('cascade')->onUpdate('cascade');

        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

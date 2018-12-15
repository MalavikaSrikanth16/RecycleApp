<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createbiodegradableproductslist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodegradable_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item');
            $table->boolean('biodegradable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('biodegradable_products');
    }
}

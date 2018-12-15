<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaplocationtable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maplocations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->string('subcategory');
            $table->float('lat');
            $table->float('long');
            $table->integer('refid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('maplocations');

    }
}

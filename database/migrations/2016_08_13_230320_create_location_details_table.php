<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recyclelocations', function (Blueprint $table) {
            $table->integer('refid');
            $table->string('name');
            $table->string('address');
            $table->string('landmark');
            $table->string('contact');
            $table->float('rating');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('recyclelocations');
    }
}

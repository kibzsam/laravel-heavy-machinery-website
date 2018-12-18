<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id');
            $table->integer('customer_id');
            $table->integer('item_id');
            $table->string('companyname');
            $table->string('title');
            $table->string('quantity');
            $table->string('description');
            $table->string('price');
            $table->string('image');
            $table->string('status');
            $table->string('reason');
            $table->string('days');
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
        Schema::dropIfExists('requestings');
    }
}

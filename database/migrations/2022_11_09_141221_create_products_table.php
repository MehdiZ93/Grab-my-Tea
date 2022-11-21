<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('bubble_tea_id')->nullable();
            $table->unsignedInteger('popping_id')->nullable();
            $table->unsignedInteger('sugar_id')->nullable();
            $table->timestamps();

            $table->foreign('bubble_tea_id')->references('id')->on('bubble_teas');
            $table->foreign('popping_id')->references('id')->on('poppings');
            $table->foreign('sugar_id')->references('id')->on('sugars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

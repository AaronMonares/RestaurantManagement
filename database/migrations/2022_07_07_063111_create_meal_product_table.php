<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('meal_id');
            $table -> foreign('meal_id') -> references('id') -> on('meals') -> onDelete('cascade');
            $table->unsignedBigInteger('product_id');
            $table -> foreign('product_id') -> references('id') -> on('products') -> onDelete('cascade');
            
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
        Schema::dropIfExists('meal_product');
    }
};

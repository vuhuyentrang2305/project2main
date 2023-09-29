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
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->string('name');
            $table->text('img');
            $table->string('ice_percent');
            $table->string('sugar_amount');
            $table->string('size');
            $table->text('description');
            $table->integer('featured');
            $table->foreignId('product_id')->constrained('products');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_details');
    }
};

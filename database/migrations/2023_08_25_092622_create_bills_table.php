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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->integer('purchasel');
            $table->date('date');
            $table->double('total_price');
            $table->integer('status');
            $table->foreignId('customer_id')->constrained('customers');
            $table->foreignId('staff_id')->constrained('staff');
            $table->foreignId('payment_id')->constrained('payments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
};

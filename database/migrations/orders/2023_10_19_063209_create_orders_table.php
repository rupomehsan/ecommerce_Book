<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->enum('order_status',['pending','accepted','processing','delivered'])->default('pending');
            $table->float('total_price')->nullable();
            $table->float('sub_total')->nullable();
            $table->string('invoice_id', 100)->nullable();
            $table->date('date')->nullable();
            $table->float('discount_percent')->nullable();
            $table->float('discount_price')->nullable();
            $table->enum('payment_status',['pending','paid','failed'])->default('pending');
            $table->string('delivery_method', 100)->nullable();
            $table->float('delivery_cost')->nullable();

            

            $table->tinyInteger('creator')->nullable();
            $table->string('slug',50)->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

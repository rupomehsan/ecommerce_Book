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
        Schema::create('order_shipping_addresses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->nullable();
            $table->string('full_name', 100)->nullable();
            $table->string('thana', 100)->nullable();
            $table->string('district', 100)->nullable();
            $table->string('phone', 100)->nullable();
            $table->string('house_no', 100)->nullable();
            $table->string('road_no', 100)->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_shipping_addresses');
    }
};

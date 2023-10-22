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
        Schema::create('site_url_view_counts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sit_url_id')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->string('device', 45)->nullable();
            $table->string('location', 45)->nullable();

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
        Schema::dropIfExists('site_url_view_counts');
    }
};

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
        Schema::create('site_urls', function (Blueprint $table) {
            $table->id();
            $table->string('url', 200)->unique()->nullable();
            $table->string('url_for_table', 200)->nullable();
            $table->bigInteger('url_for_table_id')->nullable();
            $table->text('url_redirect_to')->nullable();
            $table->text('total_view')->nullable();
            $table->text('total_redirect')->nullable();


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
        Schema::dropIfExists('site_urls');
    }
};

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
        Schema::create('tvchannels', function (Blueprint $table) {
            $table->id();
            $table->string('desc')->nullable();
            $table->foreignId('chcategory_id')->constrained()->on('chcategories')->onDelete('cascade');
            $table->foreignId('channel_id')->constrained()->on('channels')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tvchannels');
    }
};

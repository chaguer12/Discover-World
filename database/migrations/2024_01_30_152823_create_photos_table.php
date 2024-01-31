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
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->binary('image');
            $table->integer('recit_id')
            ->nullable()
            ->foreign('recit_id')
            ->constrained('recits');
            $table->integer('dest_id')
            ->nullable()
            ->foreign('dest_id')
            ->constrained('destinations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos');
    }
};

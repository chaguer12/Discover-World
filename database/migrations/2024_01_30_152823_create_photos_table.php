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
            $table->string('image');
            $table->unsignedBigInteger('recit_id');
            $table->foreign('recit_id')
                  ->references('id')
                  ->on('recits')
                  ->nullable();
            $table->unsignedBigInteger('dest_id');
            $table->foreign('dest_id')
                  ->references('id')
                  ->on('destinations')
                  ->nullable();
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

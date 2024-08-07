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
        Schema::create('food_helps', function (Blueprint $table) {
            $table->id();
            $table->integer('children');
            $table->unsignedBigInteger('donor_id');
            $table->foreign('donor_id')->references('id')->on('donors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_helps');
    }
};

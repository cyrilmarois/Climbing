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
        Schema::create('competitions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('type', ['world cups', 'world championships']);
            $table->enum('discipline', ['lead climbing', 'bouldering']);
            $table->date('date');
            $table->string('city');
            $table->timestamps();

            $table->index('title');
            $table->index('type');
            $table->index('discipline');
            $table->index('city');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competitions');
    }
};

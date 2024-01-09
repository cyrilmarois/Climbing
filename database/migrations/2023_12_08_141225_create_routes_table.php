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
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('grade_id')->constrained();
            $table->foreignId('club_id')->constrained();
            $table->text('description')->nullable();
            $table->unsignedSmallInteger('line_id')->nullable();
            $table->unsignedSmallInteger('color_id')->nullable();
            $table->timestamp('opening_date')->useCurrent();
            $table->timestamp('closing_date')->nullable();
            $table->timestamps();

            $table->index('name');
            $table->index('grade_id');
            $table->index('club_id');
            $table->index('opening_date');
            $table->index('closing_date');
            $table->fullText('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('routes');
    }
};

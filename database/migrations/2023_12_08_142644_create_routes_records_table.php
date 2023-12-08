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
        Schema::create('routes_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('route_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('grade_id')->nullable()->constrained();
            $table->unsignedSmallInteger('tries')->nullable();
            $table->enum('type', ['lead climbing', 'top rope climbing'])->default('lead climbing');
            $table->unsignedSmallInteger('evaluation')
                ->nullable();
            $table->text('review')->nullable();
            $table->timestamps();

            $table->fullText('review');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('routes_records');
    }
};

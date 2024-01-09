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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('full_name')->nullable();
            $table->unsignedSmallInteger('nationality_country_id')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->date('birth_date')->nullable();
            $table->unsignedSmallInteger('height')->nullable();
            $table->string('avatar')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('user_id')->nullable()->contrained();
            $table->foreignId('club_id')->nullable()->constrained();
            $table->timestamps();

            $table->index('full_name');
            $table->index('gender');
            $table->index('club_id');
            $table->fullText('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profiles');
    }
};

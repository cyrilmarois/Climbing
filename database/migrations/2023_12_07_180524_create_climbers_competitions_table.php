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
        Schema::create('climbers_competitions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->bigInteger('competition_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->unsignedSmallInteger('rank');
            $table->unsignedSmallInteger('timing');
            $table->unsignedSmallInteger('points');
            $table->string('position');
            $table->timestamps();

            $table->index('rank');
            $table->index('position');
            $table->index('points');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('climbers_competitions', function (Blueprint $table) {
        //     $table->dropForeign(['climbers_competitions_climber_id', 'climbers_competitions_competition_id']);
        // });
        Schema::dropIfExists('climbers_competitions');
    }
};

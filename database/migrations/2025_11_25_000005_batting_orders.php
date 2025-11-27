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
        Schema::create('batting_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained('games');
            $table->foreignId('team_id')->constrained('teams');
            $table->integer('batting_orders');
            $table->foreignId('player_id')->constrained('players');
            $table->foreignId('position_id')->constrained('positions');
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batting_orders');
    }
};

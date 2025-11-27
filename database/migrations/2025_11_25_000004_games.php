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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->datetime('game_datetime');
            $table->foreignId('stadiums_id')->constrained('stadiums');
            $table->integer('home_team_id');
            $table->integer('home_score');
            $table->integer('visiter_team_id');
            $table->integer('visiter_score');
            $table->string('remarks',1000);
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};

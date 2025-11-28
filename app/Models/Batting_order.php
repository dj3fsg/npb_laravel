<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batting_order extends Model
{
    
    protected $fillable = [
    'game_id',
    'team_id',
    'player_id',
    'position_id',
];
     public function games()
    {
        return $this->belongsTo(Game::class);
    }
    public function teams()
    {
        return $this->belongsTo(Team::class);
    }
      public function players()
    {
        return $this->belongsTo(Player::class);
    }
    public function positions()
    {
        return $this->belongsTo(Position::class);
    }



}

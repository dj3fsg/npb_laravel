<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
    'game_datetime',
    'stadium_id',
    'home_team_id',
    'home_score',
    'visiter_team_id',
    'visiter_score',
    'remarks',
];

//Call to a member function format() on stringのエラー対応
protected $casts = [
    'game_datetime' => 'datetime',
];

      public function batting_orders()
    {
        return $this->hasMany(Batting_order::class);
    }
     public function stadiums()
    {
        return $this->belongsTo(Stadium::class);
    }
    public function homeTeam()
    {
        return $this->belongsTo(Team::class, 'home_team_id');
    }
    public function visiterTeam()
    {
        return $this->belongsTo(Team::class, 'visiter_team_id');
    }



}

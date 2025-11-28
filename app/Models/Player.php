<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'team_id',
        'player_name',
    ];

      public function batting_orders()
    {
        return $this->hasMany(Batting_order::class);
    }

    public function teams()
    {
        return $this->belongsTo(Team::class);
    }
}

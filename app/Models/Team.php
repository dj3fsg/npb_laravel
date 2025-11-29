<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['team_name'];

      public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    //テーブル「teams」のhomeカラム（ホームスタジアムID）追加に伴う修正
    public function stadiums(){
        return $this->belongsTo(Stadium::class);
    }
}

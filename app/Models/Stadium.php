<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    protected $fillable = ['stadium_name'];

      public function games()
    {
        return $this->hasMany(Game::class);
    }

    //テーブル「teams」のhomeカラム（ホームスタジアムID）追加に伴う修正
    public function teams(){
        return $this->hasOne(Stadium::class);
    }


}

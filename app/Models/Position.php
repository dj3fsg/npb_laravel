<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable=[
        'position_name',
    ];

     public function batting_orders()
    {
        return $this->hasMany(Batting_order::class);
    }


}

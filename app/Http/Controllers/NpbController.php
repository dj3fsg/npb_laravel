<?php

namespace App\Http\Controllers;
use App\Models\{
    Game,
    Team,
    Player,
    Stadium,
    Position,
};
use Illuminate\Http\Request;

class NpbController extends Controller
{
    public function index(){
      $games = Game::with(['homeTeam', 'visiterTeam', 'stadiums'])->get();
       return view('npb.games',compact('games')); 
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;
use App\Models\GamePhoto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $games = Game::select('games.*', 'game_photos.photo')
            ->join('game_photos', 'games.id', '=', 'game_photos.game_id')
            ->groupBy('games.id')
            ->get();
        $categories = Category::all();
        return view('home', compact('categories', 'games'));
    }
}

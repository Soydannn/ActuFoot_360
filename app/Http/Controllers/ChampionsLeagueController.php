<?php

namespace App\Http\Controllers;

use App\Models\ChampionsLeague;

class ChampionsLeagueController extends Controller
{
    public function index()
    {
        $champions = ChampionsLeague::latest()->paginate(6);
        return view('champions-league', compact('champions'));
    }
}

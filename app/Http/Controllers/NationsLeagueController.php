<?php

namespace App\Http\Controllers;

use App\Models\NationsLeague;

class NationsLeagueController extends Controller
{
    public function index()
    {
        $nations = NationsLeague::latest()->paginate(9);
        return view('nations', compact('nations'));
    }
}

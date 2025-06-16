<?php

namespace App\Http\Controllers;

use App\Models\Actualite;

class ActualiteController extends Controller
{
    public function index()
    {
        $lastActu = Actualite::latest()->first();
        $recentActus = Actualite::latest()->skip(1)->take(3)->get();
        return view('actualites', compact('lastActu', 'recentActus'));
    }

    public function show($id)
    {
        $article = Actualite::findOrFail($id);
        return view('actualite-detail', compact('article'));
    }
}


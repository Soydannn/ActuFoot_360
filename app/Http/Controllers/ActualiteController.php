<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use App\Models\ChampionsLeague;
use App\Models\Palmarès;
use App\Models\Transfert;



class ActualiteController extends Controller
{
    public function index()
    {
        // Récupère la dernière actualité
        $lastActu = Actualite::latest()->first();
    
        // Récupère les 3 dernières actualités après la première
        $recentActus = Actualite::latest()->skip(1)->take(3)->get();
    
        // Récupère les 3 derniers transferts
        $transferts = Transfert::latest()->take(3)->get();

        // Récupère les 3 dernières Actualités de la Champions League
        $champions = ChampionsLeague::latest()->take(3)->get();

        // Récupère les 3 dernières Actualités des palmarès
        $palmares = Palmarès::latest()->take(3)->get();

    
        return view('actualites', compact('lastActu', 'recentActus', 'transferts', 'champions', 'palmares'));
    }

    public function show($id)
    {
        $article = Actualite::findOrFail($id);
        return view('actualite-detail', compact('article'));
    }
}


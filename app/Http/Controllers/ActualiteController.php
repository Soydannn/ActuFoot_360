<?php

namespace App\Http\Controllers;

use App\Models\Actualite;

class ActualiteController extends Controller
{
    public function index()
    {
        $actualites = Actualite::latest()->paginate(6);
        return view('actualites', compact('actualites'));
    }

    public function show($id)
    {
        $article = Actualite::findOrFail($id);
        return view('actualite-detail', compact('article'));
    }
}


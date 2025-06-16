<?php

namespace App\Http\Controllers;

use App\Models\Palmarès;

class PalmaresController extends Controller
{
    public function index()
    {
        $palmares = Palmarès::latest()->paginate(6);
        return view('palmares', compact('palmares'));
    }
}

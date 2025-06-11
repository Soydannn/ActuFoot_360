<?php

namespace App\Http\Controllers;

use App\Models\Palmares;

class PalmaresController extends Controller
{
    public function index()
    {
        $palmares = Palmares::latest()->paginate(6);
        return view('palmares', compact('palmares'));
    }
}

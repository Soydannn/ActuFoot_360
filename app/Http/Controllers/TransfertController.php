<?php

namespace App\Http\Controllers;

use App\Models\Transfert;

class TransfertController extends Controller
{
    public function index()
    {
        $transferts = Transfert::latest()->paginate(9);
        return view('transferts', compact('transferts'));
    }
}


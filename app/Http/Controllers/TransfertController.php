<?php

namespace App\Http\Controllers;

use App\Models\Transfert;

class TransfertController extends Controller
{
    public function index()
    {
        $transferts = Transfert::latest()->paginate(6);
        return view('transferts', compact('transferts'));
    }
}


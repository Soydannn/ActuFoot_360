<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videos;

class VideoController extends Controller
{
    public function index()
{
    $videos = Videos::latest()->take(3)->get(); // on limite à 3 vidéos
    return view('actualites', compact('videos'));
}
}

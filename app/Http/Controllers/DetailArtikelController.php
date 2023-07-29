<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Artikel;

class DetailArtikelController extends Controller
{
    public function show(Artikel $artikel)
    {
        $artikel_detail = $artikel;
        $artikelterkait = Artikel::latest()->get()->random(3);
        // $categori = Categori::withCount('Artikel')->get();

        return view('singlenews', compact('artikel_detail', 'artikelterkait'));
    }
}

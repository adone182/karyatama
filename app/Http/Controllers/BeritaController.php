<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Artikel;

class BeritaController extends Controller
{
    public function index()
    {
        $categori = Category::all();
        $artikel = Artikel::first()->get();
        // $artikelall = Artikel::latest()->get();
        // $artikelterkait = Artikel::latest()->limit(4)->get();

        return view('news', compact('categori', 'artikel'));
    }
}


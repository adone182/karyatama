<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Artikel;

class AboutController extends Controller
{
    public function index()
    {
        $categori = Category::all();
        $artikel = Artikel::latest()->get()->random(3);
        // $artikels = Artikel::where('categories_id', '1')->latest()->take(1)->get();
        // $artikelall = Artikel::latest()->get();
        // $artikelterkait = Artikel::latest()->limit(4)->get();

        return view('tentang-kami', compact('categori', 'artikel'));
    }
}

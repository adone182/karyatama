<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Artikel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categori = Category::all();
        // $artikel = Artikel::first()->get()->random(3);
        $artikel = Artikel::where('categories_id', '1')->latest()->take(3)->get();
        $artikels = Artikel::where('categories_id', '3')->latest()->take(1)->get();
        // $artikelall = Artikel::latest()->get();
        // $artikelterkait = Artikel::latest()->limit(4)->get();

        return view('welcome', compact('categori', 'artikel', 'artikels'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Artikel;
use App\Models\Category;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::latest()->get();
        return view('admin.viewartikel', compact('artikel'));
    }

    public function create () {

        $categori = Category::select('id', 'name_category')->get();

        return view('admin.createartikel', compact('categori'));
    }

    public function store (Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'author' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'half_body' => 'required|max:123',
            'categories_id' => 'required',
            'gambar' => 'mimes:jpeg,bmp,png,jpg,webp',
        ]);
        if (empty($request->file('gambar'))) {
            Artikel::create([
                'judul' => $request->judul,
                'body' => $request->body,
                'author' => $request->author,
                'slug' => $request->slug,
                'half_body' => $request->half_body,
                'categories_id' => $request->categories_id,
                //'gambar' => $image,
            ]);
        } else {
            Artikel::create([
                'judul' => $request->judul,
                'body' => $request->body,
                'author' => $request->author,
                'slug' => $request->slug,
                'half_body' => $request->half_body,
                'categories_id' => $request->categories_id,
                'gambar' => $request->file('gambar')->store('public/uploads'),
            ]);
        }

        return redirect('/admin/createartikel')->with('success', 'Pengajuan surat asuransi berhasil dikirim.');
    }

    public function show ($id) {
        
    }

    public function edit ($id) {

        $categori = Category::select('id', 'name_category')->get();
        $artikel = Artikel::find($id);

        return view('admin.editartikel', compact('categori', 'artikel'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'author' => 'required',
            'slug' => 'required',
            'body' => 'required|min:10',
            'half_body' => 'required|max:123',
            'categories_id' => 'required',
            'gambar' => 'mimes:jpeg,bmp,png,jpg,webp',
        ]);
        if (empty($request->file('gambar'))) {
            $artikel = Artikel::find($id);
            //Storage::delete($artikel->gambar);
            $artikel->update([
                'judul' => $request->judul,
                'body' => $request->body,
                'author' => $request->author,
                'slug' => $request->slug,
                'half_body' => $request->half_body,
                'categories_id' => $request->categories_id,
            ]);
        } else {
            $artikel = Artikel::find($id);
            Storage::delete($artikel->gambar);
            $artikel->update([
                'judul' => $request->judul,
                'body' => $request->body,
                'author' => $request->author,
                'slug' => $request->slug,
                'half_body' => $request->half_body,
                'categories_id' => $request->categories_id,
                'gambar' => $request->file('gambar')->store('uploads'),
            ]);
        }

        return back();
    }

    public function destroy($id)
    {
        $artikel = Artikel::find($id);
        if (!$artikel) {
            return redirect()->back();
        }
        Storage::delete($artikel->gambar);
        $artikel->delete();

        return back();
    }
}

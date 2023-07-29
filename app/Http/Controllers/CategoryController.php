<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.viewcategory');
    }

    public function create () {
        return view ('admin.createcategory');
    }

    public function store (Request $request)
    {
        $this->validate($request, [
            'name_category' => 'required'
        ]);

        
        Category::create($request->all());

        return redirect('/admin/createcategory')->with('success', 'Pengajuan surat asuransi berhasil dikirim.');
    }
}

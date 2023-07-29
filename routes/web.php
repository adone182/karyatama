<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DetailArtikelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        "title" => "HOME",
        "active" => "HOME",
    ]);
});


Route::get('/product', function () {
    return view('product', [
        "title" => "PRODUCT",
        "active" => "PRODUCT",
    ]);
});

Route::get('/tentang-kami', function () {
    return view('tentang-kami',[
        "title" => "TENTANG KAMI",
        "active" => "TENTANG KAMI",
    ]);
});

Route::get('/news', function () {
    return view('news',[
        "title" => "BERITA",
        "active" => "BERITA",
    ]);
});

Route::get('/news-details', function () {
    return view('singlenews',[
        "title" => "BERITA DETAILS",
        "active" => "BERITA",
    ]);
});

// Route::get('/karir', function () {
//     return view('',[
//         "title" => "KARIR",
//         "active" => "KARIR",
//     ]);
// });

Route::get('/hubungi-kami', function () {
    return view('hubungikami',[
        "title" => "HUBUNGI KAMI",
        "active" => "HOME",
    ]);
});

Route::get('/karir', function () {
    return view('karir',[
        "title" => "Karir",
        "active" => "KARIR",
    ]);
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin/index', function () {
    return view('admin/index',[
        "title" => "Karir",
        "active" => "KARIR",
    ]);
});


Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/tentang-kami', [AboutController::class, 'index'])->name('tentang-kami');
Route::get('/news', [BeritaController::class, 'index'])->name('news');
Route::get('/singlenews/{id}', [DetailArtikelController::class, 'show'])->name('singlenews');
Route::get('/singlenews', [DetailArtikelController::class, 'show'])->name('singlenews');

Route::get('/admin/viewartikel', [ArtikelController::class, 'index'])->name('admin.viewartikel');
Route::get('admin/createartikel', [ArtikelController::class, 'create'])->name('admin.createartikel');
Route::post('/admin/createartikel', [ArtikelController::class, 'store'])->name('admin.createartikel');
Route::get('/admin/editartikel/{id}', [ArtikelController::class, 'edit'])->name(('admin.editartikel'));
Route::put('/admin/editartikel/{id}', [ArtikelController::class, 'update'])->name(('admin.editartikel'));
Route::delete('/admin/viewartikel/{id}', [ArtikelController::class, 'destroy'])->name(('admin.viewartikel'));

Route::get('/admin/viewcategory', [CategoryController::class, 'index'])->name('admin.viewcategory');
Route::get('admin/createcategory', [CategoryController::class, 'create'])->name('admin.createcategory');
Route::post('/admin/createcategory', [CategoryController::class, 'store'])->name('admin.createcategory');

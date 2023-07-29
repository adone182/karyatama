<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'body', 'half_body', 'gambar', 'author', 'slug', 'categories_id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'name_category');
    }

    // public function getRouteKeyName()
    // {
    //     return 'judul';
    // }
}


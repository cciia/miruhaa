<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'beritas';

    protected $fillable = [
        'judul',
        'isi',
        'gambar',
        'kategori',
        'slug', 
    ];

    protected static function booted()
    {
        static::creating(function ($berita) {
            $berita->slug = \Str::slug($berita->judul) . '-' . time();
        });
    }

}
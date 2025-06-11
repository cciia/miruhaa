<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;
use Illuminate\Support\Str;

class SlugBeritaSeeder extends Seeder
{
    public function run()
    {
        Berita::all()->each(function ($berita) {
            $berita->slug = Str::slug($berita->judul) . '-' . uniqid();
            $berita->save();
        });
    }
}
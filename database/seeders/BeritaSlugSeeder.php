<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;
use Illuminate\Support\Str;

class BeritaSlugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $beritas = Berita::whereNull('slug')->get();

        foreach ($beritas as $berita) {
            $slug = Str::slug($berita->judul);

            // Tambah timestamp biar gak duplikat
            $berita->slug = $slug . '-' . time();
            $berita->save();
        }

        echo "Slug berhasil ditambahkan ke semua berita yang belum punya slug.\n";
    }
}

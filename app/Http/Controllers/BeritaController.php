<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    // Untuk admin: menampilkan semua berita di halaman admin (CRUD)
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('admin.berita.index', compact('beritas'));
    }

    // Untuk user biasa: menampilkan berita untuk halaman publik
    public function indexPublic()
    {
        $beritas = Berita::latest()->get();
        return view('berita.index', compact('beritas')); 
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'kategori' => 'required|in:prestasi,kegiatan,ekstrakulikuler',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

       $data = $request->only('judul', 'isi', 'kategori');
        $data['slug'] = Str::slug($request->judul) . '-' . time(); // ini penting!

        // handle gambar...
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $filename = Str::slug($request->judul) . '-' . time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->storeAs('berita', $filename, 'public');
            $data['gambar'] = $filename;
        }

        Berita::create($data);



        // Redirect ke route admin.berita.index karena ini admin CRUD
        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'kategori' => 'required|in:prestasi,kegiatan,ekstrakulikuler',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only('judul', 'isi', 'kategori');

        $data['slug'] = Str::slug($request->judul) . '-' . time();

        if ($request->hasFile('gambar')) {
            if ($berita->gambar && Storage::exists('public/berita/' . $berita->gambar)) {
                Storage::delete('public/berita/' . $berita->gambar);
            }

            $gambar = $request->file('gambar');
            $filename = Str::slug($request->judul) . '-' . time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->storeAs('berita', $filename, 'public');
            $data['gambar'] = $filename;
        }

        $berita->update($data);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy(Berita $berita)
    {
        if ($berita->gambar && Storage::exists('public/berita/' . $berita->gambar)) {
            Storage::delete('public/berita/' . $berita->gambar);
        }

        $berita->delete();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus.');
    }

    // Menampilkan detail berita untuk user biasa
   public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        return view('detail', compact('berita'));
    }

}

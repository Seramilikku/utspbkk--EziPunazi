<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Penulis;
use App\Models\Rak;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        return view('bukus.index', compact('bukus'));
    }

    public function create()
    {
        $penuliss = Penulis::all();
        $raks = Rak::all();
        return view('bukus.create', compact('penuliss', 'raks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:200',
            'edisi' => 'required|string|max:50',
            'tahun' => 'required|date',
            'penerbit' => 'required|string|max:100',
            'kd_penulis' => 'required|exists:penuliss,kd_penulis',
            'no_rak' => 'required|exists:raks,kd_rak',
        ]);

        Buku::create($request->all());

        return redirect()->route('bukus.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        $penuliss = Penulis::all();
        $raks = Rak::all();
        return view('bukus.edit', compact('buku', 'penuliss', 'raks'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:200',
            'edisi' => 'required|string|max:50',
            'tahun' => 'required|date',
            'penerbit' => 'required|string|max:100',
            'kd_penulis' => 'required|exists:penuliss,kd_penulis',
            'no_rak' => 'required|exists:raks,kd_rak',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update($request->all());

        return redirect()->route('bukus.index')->with('success', 'Buku berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('bukus.index')->with('success', 'Buku berhasil dihapus!');
    }
}

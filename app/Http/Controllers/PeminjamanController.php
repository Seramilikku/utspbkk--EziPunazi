<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Anggota;
use App\Models\Buku;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjamans = Peminjaman::all();
        return view('peminjamans.index', compact('peminjamans'));
    }

    public function create()
    {
        $anggotas = Anggota::all();
        $bukus = Buku::all();
        return view('peminjamans.create', compact('anggotas', 'bukus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_anggota' => 'required|exists:anggotas,id',
            'no_buku' => 'required|exists:bukus,no_buku',
            'tgl_peminjaman' => 'required|date',
            'tgl_pengembalian' => 'nullable|date',
            'status' => 'required|in:kembali,belum',
        ]);

        Peminjaman::create($request->all());

        return redirect()->route('peminjamans.index')->with('success', 'Data peminjaman berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $anggotas = Anggota::all();
        $bukus = Buku::all();
        return view('peminjamans.edit', compact('peminjaman', 'anggotas', 'bukus'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_anggota' => 'required|exists:anggotas,id',
            'no_buku' => 'required|exists:bukus,no_buku',
            'tgl_peminjaman' => 'required|date',
            'tgl_pengembalian' => 'nullable|date',
            'status' => 'required|in:kembali,belum',
        ]);

        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update($request->all());

        return redirect()->route('peminjamans.index')->with('success', 'Data peminjaman berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();

        return redirect()->route('peminjamans.index')->with('success', 'Data peminjaman berhasil dihapus!');
    }
}

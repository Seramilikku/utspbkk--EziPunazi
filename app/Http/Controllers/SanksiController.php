<?php

namespace App\Http\Controllers;

use App\Models\Sanksi;
use Illuminate\Http\Request;

class SanksiController extends Controller
{
    public function index()
    {
        $sanksis = Sanksi::all();
        return view('sanksis.index', compact('sanksis'));
    }

    public function create()
    {
        // logic to fetch related data if needed
        return view('sanksis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_anggota' => 'required|exists:anggotas,id',
            'id_peminjaman' => 'required|exists:peminjamans,id_peminjaman',
            'jumlah_denda' => 'required|integer|min:0',
            'status' => 'required|in:tunggakan,lunas',
        ]);

        Sanksi::create($request->all());

        return redirect()->route('sanksis.index')->with('success', 'Data sanksi berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $sanksi = Sanksi::findOrFail($id);
        return view('sanksis.edit', compact('sanksi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_anggota' => 'required|exists:anggotas,id',
            'id_peminjaman' => 'required|exists:peminjamans,id_peminjaman',
            'jumlah_denda' => 'required|integer|min:0',
            'status' => 'required|in:tunggakan,lunas',
        ]);

        $sanksi = Sanksi::findOrFail($id);
        $sanksi->update($request->all());

        return redirect()->route('sanksis.index')->with('success', 'Data sanksi berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $sanksi = Sanksi::findOrFail($id);
        $sanksi->delete();

        return redirect()->route('sanksis.index')->with('success', 'Data sanksi berhasil dihapus!');
    }
}

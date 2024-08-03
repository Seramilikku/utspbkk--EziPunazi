<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    public function index()
    {
        $penuliss = Penulis::all();
        return view('penuliss.index', compact('penuliss'));
    }

    public function create()
    {
        return view('penuliss.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_penulis' => 'required|string|max:150',
            'tempat_lahir' => 'required|string|max:100',
            'tgl_lahir' => 'required|date',
            'email' => 'required|string|email|max:150|unique:penuliss,email',
        ]);

        Penulis::create($request->all());

        return redirect()->route('penuliss.index')->with('success', 'Data penulis berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $penulis = Penulis::findOrFail($id);
        return view('penuliss.edit', compact('penulis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_penulis' => 'required|string|max:150',
            'tempat_lahir' => 'required|string|max:100',
            'tgl_lahir' => 'required|date',
            'email' => 'required|string|email|max:150|unique:penuliss,email,' . $id,
        ]);

        $penulis = Penulis::findOrFail($id);
        $penulis->update($request->all());

        return redirect()->route('penuliss.index')->with('success', 'Data penulis berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $penulis = Penulis::findOrFail($id);
        $penulis->delete();

        return redirect()->route('penuliss.index')->with('success', 'Data penulis berhasil dihapus!');
    }
}

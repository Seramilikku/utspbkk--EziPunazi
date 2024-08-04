<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggotas = Anggota::all();
        return view('anggotas.index', compact('anggotas'));
    }

    public function create()
    {
        return view('anggotas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:150',
            'no_hp' => 'required|string|max:150',
            'alamat' => 'required|string',
            'email' => 'required|string|email|max:200|unique:anggotas,email',
        ]);

        Anggota::create($request->all());

        return redirect()->route('anggotas.index')->with('success', 'Anggota berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('anggotas.edit', compact('anggota'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:150',
            'no_hp' => 'required|string|max:150',
            'alamat' => 'required|string',
            'email' => 'required|string|email|max:200|unique:anggotas,email,' . $id,
        ]);

        $anggota = Anggota::findOrFail($id);
        $anggota->update($request->all());

        return redirect()->route('anggotas.index')->with('success', 'Anggota berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();

        return redirect()->route('anggotas.index')->with('success', 'Anggota berhasil dihapus!');
    }
    
}

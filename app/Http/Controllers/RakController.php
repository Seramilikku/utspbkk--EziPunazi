<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use Illuminate\Http\Request;

class RakController extends Controller
{
    public function index()
    {
        $raks = Rak::all();
        return view('raks.index', compact('raks'));
    }

    public function create()
    {
        return view('raks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'lokasi' => 'required|string|max:150',
        ]);

        Rak::create($request->all());

        return redirect()->route('raks.index')->with('success', 'Data rak berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $rak = Rak::findOrFail($id);
        return view('raks.edit', compact('rak'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'lokasi' => 'required|string|max:150',
        ]);

        $rak = Rak::findOrFail($id);
        $rak->update($request->all());

        return redirect()->route('raks.index')->with('success', 'Data rak berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $rak = Rak::findOrFail($id);
        $rak->delete();

        return redirect()->route('raks.index')->with('success', 'Data rak berhasil dihapus!');
    }
}

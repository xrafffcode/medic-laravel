<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function index()
    {
        $ruangans = Ruangan::all();

        return view('ruangan.index', compact('ruangans'));
    }

    public function create()
    {
        return view('ruangan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_ruangan' => 'required',
            'kelas' => 'required',
            'lantai' => 'required',
        ]);

        Ruangan::create($request->all());

        return redirect()->route('ruangan.index')
            ->with('success', 'Ruangan created successfully.');
    }

    public function show(Ruangan $ruangan)
    {
        return view('ruangan.show', compact('ruangan'));
    }

    public function edit(Ruangan $ruangan)
    {
        return view('ruangan.edit', compact('ruangan'));
    }

    public function update(Request $request, Ruangan $ruangan)
    {
        $request->validate([
            'no_ruangan' => 'required',
            'kelas' => 'required',
            'lantai' => 'required',
        ]);

        $ruangan->update($request->all());

        return redirect()->route('ruangan.index')
            ->with('success', 'Ruangan updated successfully');
    }

    public function destroy(Ruangan $ruangan)
    {
        $ruangan->delete();

        return redirect()->route('ruangan.index')
            ->with('success', 'Ruangan deleted successfully');
    }
}

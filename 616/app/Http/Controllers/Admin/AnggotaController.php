<?php

namespace App\Http\Controllers\Admin;

use App\Models\Anggota;
use App\Http\Controllers\Controller;
use App\Http\Requests\AnggotaRequest;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggotas = Anggota::orderBy('name','ASC')->paginate(5);
        return view('admin.anggota.index', [
            'anggotas' => $anggotas
        ]);
    }

    public function create()
    {
        
        return view('admin.anggota.create');
    }

    public function store(AnggotaRequest $request)
    {
        // Anggota::create($request->validated());
        $request->validate([
            'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'name' => 'required',
            'tgl_lhr' => 'required',
            'address' => 'required',
            'ig' => 'required'
        ]);

        $path = $request->file('foto')->store('public/img');
        $anggota = new Anggota;
        $anggota->name = $request->name;
        $anggota->tgl_lhr = $request->tgl_lhr;
        $anggota->address = $request->address;
        $anggota->ig = $request->ig;
        $anggota->foto = $path;
        $anggota->save();

        return redirect()->route('anggotas.index')->with('message', 'Anggota Created Successfully!');
    }

    public function show(Anggota $anggota)
    {
        $anggota = Anggota::find($anggota);
        return view('admin.anggota.show', compact('anggota'));
    }

    public function edit(Anggota $anggota)
    {
        return view('admin.anggota.edit', compact('anggota'));
    }

    public function update(AnggotaRequest $request, Anggota $anggota)
    {
        $anggota->update($request->validated());

        
        return redirect()->route('anggotas.index')->with('message', 'Anggota Created Successfully!');
    }

    public function destroy(Anggota $anggota)
    {
        $anggota->delete();

        return redirect()->route('anggotas.index')->with('message', 'Anggota Deleted Successfully!');
    }
}

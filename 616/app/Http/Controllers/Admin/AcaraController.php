<?php

namespace App\Http\Controllers\Admin;

use App\Models\Acara;
use App\Http\Controllers\Controller;
use App\Http\Requests\AcaraRequest;
use App\Models\Anggota;

class AcaraController extends Controller
{
    public function index()
    {
        $pj = Anggota::find('id');
        return view('admin.acara.index', [
            'acaras' => Acara::latest()->get(),
            'pj'=>$pj
        ]);
    }

    public function create()
    {
        // $penanggungjawab = Anggota::all();
        // return view('admin.acara.create', compact ('penanggungjawab'));
        $pj = Anggota::all();
        return view('admin.acara.create', compact('pj'));
    }

    public function store(AcaraRequest $request)
    {
        Acara::create($request->validated());
        return redirect()->route('acaras.index')->with('message', 'Acara Created Successfully!');
    }

    public function show(Acara $acara)
    {
        // return $acara;
        return view('admin.acara.show', compact('acara'));
    }

    public function edit(Acara $acara)
    {
        return view('admin.acara.edit', compact('acara'));
    }

    public function update(AcaraRequest $request, Acara $acara)
    {
        $acara->update($request->validated());

        return redirect()->route('acaras.index')->with('message', 'Acara Created Successfully!');
    }

    public function destroy(Acara $acara)
    {
        $acara->delete();

        return redirect()->route('acaras.index')->with('message', 'Acara Deleted Successfully!');
    }
}

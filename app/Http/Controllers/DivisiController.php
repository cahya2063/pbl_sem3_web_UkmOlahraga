<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{

    public function index()
    {
        $dtDivisi = Divisi::all();
        return view('divisi.index', compact('dtDivisi'));
    }


    public function create()
    {
        return view('divisi.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required'
        ]);

        Divisi::create([
            'nama' => $request->nama,
        ]);

        return redirect('divisi')->with('toast_success', 'Data Berhasil Disimpan');
    }


    public function edit(string $id)
    {
        $divisis = Divisi::findOrFail($id);
        return view('divisi.edit', compact('divisis'));
    }


    public function update(Request $request, string $id)
    {
        $divisis = Divisi::findOrFail($id);
        $divisis->update($request->all());
        return redirect('divisi')->with('toast_success', 'Data Berhasil Diubah');
    }


    public function destroy(string $id)
    {
        $divisis = Divisi::findOrFail($id);
        $divisis->delete();
        return back()->with('toast_success', 'Data Berhasil Dihapus');
    }
}

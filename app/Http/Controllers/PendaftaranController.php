<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendaftaranController extends Controller
{
    public function index()
    {
        $dtPendaftaran = Pendaftaran::all();
        return view ('pendaftaran.index', compact('dtPendaftaran'));
    }


    public function detail($id)
    {
        $detail = Pendaftaran::where('id', $id)->first();
        return view('pendaftaran.detail', compact('detail'));
    }


    // public function edit(string $id)
    // {
    //     $pendaftar = Pendaftaran::findOrFail($id);
    //     return view('pendaftaran.edit', compact('pendaftar'));
    // }


    // public function update(Request $request, string $id)
    // {
    //     $pendaftar = Pendaftaran::findOrFail($id);
    //     $pendaftar->update($request->all());
    //     return redirect()->route('detail-terima')->with('toast_success', 'Data Berhasil Diubah');
    // }


    public function terima()
    {
        $pendaftar = Pendaftaran::all();
        return view('pendaftaran.terima', compact('pendaftar'));
    }

    public function tolak()
    {
        $pendaftar = Pendaftaran::all();
        return view('pendaftaran.tolak', compact('pendaftar'));
    }

    public function updateterima($id)
    {
        $user = Auth::user()->id;
        $pendaftar = Pendaftaran::find($id);
        $pendaftar->update([
            'status' => "terima",
        ]);

        return redirect('pendaftaran')->with('toast_success', 'Pendaftar diterima');
    }

    public function updatetolak($id)
    {
        $user = Auth::user()->id;
        $pendaftar = Pendaftaran::find($id);
        $pendaftar->update([
            'status' => "tolak",
        ]);

        return redirect(route('pendaftaran'))->with('toast_success', 'Pendaftar ditolak');
    }
}

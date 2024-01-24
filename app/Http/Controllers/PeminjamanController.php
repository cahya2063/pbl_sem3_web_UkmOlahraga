<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{

    public function index()
    {
        $dtPeminjaman = Peminjaman::all();
        return view ('alat.pinjam.index', compact('dtPeminjaman'));
    }


    // public function create() // relasi untuk menampilkan nama alat
    // {

    //     $alat = Alat::all();
    //     return view ('alat.pinjam.create', compact('alat'));
    // }


    // public function store(Request $request)
    // {
    //     // Lakukan validasi
    //     $this->validate($request, [
    //         'nama' => 'required|string|max:255',
    //         'nim' => 'required|string|max:255',
    //         'prodi' => 'required|string|max:255',
    //         'nama_barang' => 'required|string|max:255',
    //         'jml_barang' => 'required|integer|min:1',
    //         'tggl_pinjam' => 'required|date',
    //     ]);

    //     $alat = Alat::where('nama_barang', $request->nama_barang)->first();

    //     if ($alat && $alat->stok >= $request->jml_barang) {
    //         // Lakukan pengurangan stok
    //         $alat->stok -= $request->jml_barang;
    //         $alat->save();

    //         $peminjaman = Peminjaman::create([
    //             'nama' => $request->nama,
    //             'nim' => $request->nim,
    //             'prodi' => $request->prodi,
    //             'nama_barang' => $request->nama_barang,
    //             'jml_barang' => $request->jml_barang,
    //             'tggl_pinjam' => $request->tggl_pinjam,
    //         ]);

    //         if($peminjaman) {
    //             return redirect()->route('peminjaman')->with('success', 'Peminjaman berhasil dibuat');
    //         }
    //     } else {
    //         return redirect()->route('create-pinjam')->with('error', 'Stok tidak mencukupi');
    //     }
    // }

}

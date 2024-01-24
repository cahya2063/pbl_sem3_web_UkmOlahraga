<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Alat;
use Illuminate\Http\Request;
use App\Models\Peminjaman as ModelsPeminjaman;


class peminjaman extends Controller
{
    public function index(){
        $data = ModelsPeminjaman::all();

        return response()->json([$data, 201]);
    }

    public function readId(string $nim){
        $dataId = ModelsPeminjaman::where('nim', $nim)->get();

        return response()->json([$dataId, 200]);
    }

    public function store(Request $request){
        $validate = $request->validate([

        'nama'=>'required',
        'nim'=>'required',
        'prodi'=>'required',
        'nama_barang'=>'required',
        'jml_barang'=>'required',
        'tggl_pinjam'=>'required',
        'bukti'=>'nullable',
        ]);

        $pinjam = new ModelsPeminjaman();

        $pinjam->nama = $request->nama;
        $pinjam->nim = $request->nim;
        $pinjam->prodi = $request->prodi;
        $pinjam->nama_barang = $request->nama_barang;
        $pinjam->jml_barang = $request->jml_barang;
        $pinjam->tggl_pinjam = $request->tggl_pinjam;
        $pinjam->bukti = $request->bukti;
        
        $alat = Alat::where('nama_barang', $request->nama_barang)->first();
        if ($alat && $alat->stok >= $request->jml_barang) {
            $alat->stok -= $request->jml_barang;
            $pinjam->save();
            $alat->save();
        }
        else if($alat && $alat->stok <= $request->jml_barang){
            return response()->json([
                'status'=>false,
                'message'=>'stok tidak mencukupi',
            ]);
        }
        return response()->json([
            'status'=>true,
            'message'=>'tambah data berhasil',
            'data'=>$pinjam,
            200
        ]);
    }
}

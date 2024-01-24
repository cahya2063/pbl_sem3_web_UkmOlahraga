<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Alat;
use App\Models\Peminjaman;
use App\Models\pengembalian as ModelsPengembalian;
use Illuminate\Http\Request;

class pengembalian extends Controller
{
    //
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama'=>'required',
            'nim'=>'required',
            'prodi'=>'required',
            'nama_barang'=>'required',
            'jml_barang'=>'required',
            'tggl_pinjam'=>'required',
            'tggl_kembali'=>'required',
            'deskripsi'=>'required',
            'bukti'=>'nullable',
        ]);

        // Ambil data peminjaman berdasarkan nama_barang, nim, dan tggl_pinjam
        $peminjaman = Peminjaman::where([
            'nama_barang' => $request->nama_barang,
            'nim' => $request->nim,
            'tggl_pinjam' => $request->tggl_pinjam,
        ])->first();

        // Cek apakah data peminjaman ditemukan
        if (!$peminjaman) {
            return response()->json([
                'status' => 'pengembalian gagal',
                'message' => 'data peminjaman tidak ditemukan',
            ]);
        }

        // Cek apakah jumlah barang yang dikembalikan sesuai atau kurang dari yang dipinjam
        if ($request->jml_barang > $peminjaman->jml_barang) {
            return response()->json([
                'status' => 'pengembalian gagal',
                'message' => 'jumlah barang yang dikembalikan tidak sesuai',
            ]);
        }

        // Mengurangi nilai stok di database alat
        $alat = Alat::where('nama_barang', $peminjaman->nama_barang)->first();
        if ($alat) {
            $newStock = $alat->stok + $request->jml_barang; // Tambahkan jumlah barang yang dikembalikan ke stok
            $alat->update(['stok' => $newStock]);

            $pengembalian = new ModelsPengembalian();
            $pengembalian->fill($request->all());
            $pengembalian->save(); // menyimpan data pengembalian ke tabel pengembalian

            $peminjaman->delete(); // hapus data peminjaman
            return response()->json([
                'status' => 'success',
                'message' => 'pengembalian barang berhasil',
                'data' => $pengembalian,
            ]);
        }
    }

    public function destroy(string $id)
    {

        $produk = ModelsPengembalian::findOrFail($id);
        $produk->delete();

        return response()->json([
            "status" => true,
            "message" => "Berhasil Dihapus",
            "data" => $produk,
        ]);
    }
}

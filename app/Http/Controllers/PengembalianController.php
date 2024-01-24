<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengembalianController extends Controller
{
    public function index()
    {
        $dtpengembalian = Pengembalian::all();
        return view('alat.pengembalian.index', compact('dtpengembalian'));
    }

    // public function create()
    // {
    //     $alat = Alat::all();
    //     return view('alat.pengembalian.kembali', compact('alat'));
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'nama_barang' => 'required',
    //         'jml_barang' => 'required|numeric|min:1',
    //         'tggl_kembali' => 'required|date',
    //         'status' => 'required',
    //         'image' => 'nullable|file|mimes:jpeg,png,jpg|max:10240',
    //     ]);

    //     // Simpan gambar ke storage
    //     if ($request->hasFile('image')) {
    //         $image = $request->file('image');
    //         $imageName = time() . '.' . $image->getClientOriginalExtension();
    //         $image->storeAs('image', $imageName, 'public');
    //     } else {
    //         $imageName = null; // No image upload
    //     }


    //     // Ambil data peminjaman berdasarkan nama alat
    //     $peminjaman = Peminjaman::where('nama_barang', $request->nama_barang)->first();

    //     // Cek apakah data peminjaman ditemukan
    //     if (!$peminjaman) {
    //         return redirect()->back()->with('error', 'Data peminjaman tidak ditemukan.');
    //     }

    //     // Cek apakah jumlah barang yang dikembalikan sama dengan yang dipinjam
    //     if ($request->jml_barang > $peminjaman->jml_barang) {
    //         return redirect()->back()->with('error', 'Jumlah alat yang dikembalikan tidak sesuai dengan saat peminjaman alat.');
    //     }

    //     // Mengurangi nilai stok di database alat
    //     $alat = Alat::where('nama_barang', $peminjaman->nama_barang)->first();
    //     if ($alat) {
    //         $newStock = $alat->stok + $request->jml_barang; // Tambahkan jumlah barang yang dikembalikan ke stok
    //         $alat->update(['stok' => $newStock]);
    //     }

    //     // Simpan data ke tabel pengembalian
    //     Pengembalian::create([
    //         'nama' => $peminjaman->nama,
    //         'nim' => $peminjaman->nim,
    //         'prodi' => $peminjaman->prodi,
    //         'nama_barang' => $request->nama_barang,
    //         'jml_barang' => $request->jml_barang,
    //         'tggl_kembali' => $request->tggl_kembali,
    //         'tggl_pinjam' => $peminjaman->tggl_pinjam,
    //         'status' => $request->status,
    //         'image' => $imageName,
    //     ]);

    //     // Menghapus data peminjaman
    //     $peminjaman->delete();

    //     return redirect()->route('pengembalian')->with('success', 'Alat berhasil dikembalikan.');
    // }



    public function destroy(string $id)
    {
        $alat = Pengembalian::findOrFail($id);

        if ($alat->image) {
            Storage::delete('public/gambar/' . $alat->image);
        }
        $alat->delete();
        return back()->with('toast_success', 'Data Berhasil Dihapus');
    }
}

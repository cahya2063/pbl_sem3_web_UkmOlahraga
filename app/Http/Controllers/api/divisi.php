<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Api\peminjaman;
use App\Http\Controllers\Controller;
use App\Models\Divisi as ModelsDivisi;
use App\Models\Peminjaman as ModelsPeminjaman;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class divisi extends Controller
{
    public function index(){
        $data = ModelsDivisi::all();

        return response()->json([$data, 200]);
    }

    public function readId(string $id){
        $dataId = ModelsDivisi::find($id);

        return response()->json([$dataId, 200]);
    }

    function getDataAnggota($divisi_1, $divisi_2){
        $query = Pendaftaran::where('status', 'terima');

        if ($divisi_1 || $divisi_2) {
            $query->where(function ($q) use ($divisi_1, $divisi_2) {
                if ($divisi_1) {
                    $q->where('divisi_1', $divisi_1);
                }

                if ($divisi_2) {
                    $q->orWhere('divisi_2', $divisi_2);
                }
            });
        }

        $result = $query->get();

        return response()->json([
            $result,
            200
        ]);
    }

}

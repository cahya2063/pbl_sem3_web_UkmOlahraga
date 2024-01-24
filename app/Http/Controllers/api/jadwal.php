<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal as ModelsJadwal;

class jadwal extends Controller
{
    public function index(){
        $data = ModelsJadwal::all();

        return response()->json([$data, 201]);
    }


    public function readId(string $id){
        $dataId = ModelsJadwal::find($id);

        return response()->json([$dataId, 201]);
    }


    public function store(Request $request){
        $validate = $request->validate([

        'hari'=>'required',
        'waktu_mulai'=>'required',
        'waktu_selesai'=>'required',
        'divisi_id'=>'required'
        ]);
        $jadwal = new ModelsJadwal();

        $jadwal->hari = $request->hari;
        $jadwal->waktu_mulai = $request->waktu_mulai;
        $jadwal->waktu_selesai = $request->waktu_selesai;
        $jadwal->divisi_id = $request->divisi_id;
        $jadwal->save();

        return response()->json([
            'status'=>true,
            'message'=>'tambah data berhasil',
            'data'=>$jadwal,
        ]);
    }
}

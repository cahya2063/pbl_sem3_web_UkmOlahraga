<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Pendaftaran as ModelsAnggota;
use App\Models\User;
use Illuminate\Http\Request;

class pendaftaran extends Controller
{
    public function index(){
        $anggota = ModelsAnggota::all();

        return response()->json([$anggota, 201]);
    }

    public function viewByNim(string $nim){
        $dataId = ModelsAnggota::where('nim', $nim)->first();

        return response()->json([$dataId, 200]);
    }


    public function viewUser(){
        $user = User::all();
        return response()->json([$user, 201]);
    }


    public function store(Request $request){
        $validasi = $request->validate([
            'nama'=>'required',
            'nim'=>'required',
            'prodi'=>'required',
            'email'=>'required',
            'no_telp'=>'required',
            'cv'=>'nullable',
            'semester'=>'required',
            'divisi_1'=>'required',
            'divisi_2'=>'nullable',
        ]);
        
        $anggota = new ModelsAnggota();
        $anggota->nama = $request->nama;
        $anggota->nim = $request->nim;
        $anggota->prodi = $request->prodi;
        $anggota->email = $request->email;
        $anggota->no_telp = $request->no_telp;
        $anggota->cv = $request->cv;
        $anggota->semester = $request->semester;
        $anggota->divisi_1 = $request->divisi_1;
        $anggota->divisi_2 = $request->divisi_2;

        $anggota->save();
        return response()->json([
            'status'=>true,
            'message'=>'berhasil mendaftar',
            'data'=>$anggota,
        ]);
    }
}

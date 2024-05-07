<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\Divisi;
use Illuminate\Http\Request;

class presensiController extends Controller
{
    //
    public function index()
    {
        $dtDivisi = Divisi::all();
        return view('presensi.presensi', compact('dtDivisi'));
    }

}

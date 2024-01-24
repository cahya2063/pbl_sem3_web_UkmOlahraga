<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Alat;
use Illuminate\Http\Request;

class alatController extends Controller
{
    public function index(){
        $data = Alat::all();

        return response()->json([$data, 200]);
    }
}

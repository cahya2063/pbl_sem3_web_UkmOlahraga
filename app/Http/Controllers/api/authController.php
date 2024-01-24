<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{

    // *** LOGIN ***//
    public function login(Request $request){
        $loginData = $request->validate([
            "email"=> "required",
            "password"=> "required",
        ]);

        if(!auth()->attempt($loginData)){
            return response()->json([
                "status"=>false,
                "message"=> "User/Password salah"
            ]);
        }

        $token = auth()->user()->createToken("auth_token");

        return response()->json([
            "data"=>Auth::user(),
            "status"=>true,
            "message"=>"Login Berhasil",
            "access_token"=>$token
        ]);
    }


    // *** REGISTER ***//
    public function register(Request $request){
        $registerData = $request->validate([
            "name" => "required",
            "nim" => "required",
            "prodi" => "required",
            "email" => "required|email",
            "password" => "required",
        ]);

        $user = new User([
            "name" => $request->name,
            "nim" => $request->nim,
            "prodi" => $request->prodi,
            "role" => "user",
            "email" => $request->email,
            "password" => $request->password
        ]);

        $user->save();

        return response()->json([
            "status" => true,
            "message" => "Register Berhasil",
            "data" => $user,
        ]);
    }


    // *** PROFILE ***//
    public function viewUser(){
        $user = User::all();
        return response()->json([$user, 200]);
    }


    public function update(Request $request, string $id)
    {
        $validasiData = $request->validate([
           "email"=>"required",
           "password" => "required"
        ]);

        $profile = User::findOrFail($id);
        $profile->email = $request->email;
        $profile->password = $request->password;
        $profile->save();

        return response()->json([
            'status' => true,
            'message' => "Profile Berhasil di edit",
            'data' => $profile,
        ]);
    }
}

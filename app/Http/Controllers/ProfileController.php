<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }


    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email,' . Auth::user()->id,
            'current_password' => 'nullable|required_with:new_password',
            'new_password' => 'nullable|min:8|max:12|required_with:current_password',
            'password_confirmation' => 'nullable|min:8|max:12|required_with:new_password|same:new_password',
        ], [
            'current_password.required_with' => 'Silakan masukkan kata sandi saat ini.',
            'new_password.min' => 'New password minimal 8 karakter.',
            'new_password.max' => 'New password maksimal 12 karakter.',
            'new_password.required_with' => 'Silakan masukkan kata sandi baru.',
            'password_confirmation.min' => 'Confirm password minimal 8 karakter.',
            'password_confirmation.max' => 'Confirm password maksimal 12 karakter.',
            'password_confirmation.required_with' => 'Masukkan konfirmasi kata sandi baru.',
            'password_confirmation.same' => 'Kata sandi tidak sesuai dengan kata sandi baru.',
        ]);

        $user = User::findOrFail(Auth::user()->id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if (!is_null($request->input('current_password'))) {
            if (Hash::check($request->input('current_password'), $user->password)) {
                $user->password = $request->input('new_password');
            } else {
                return redirect()->back()->withErrors('Password saat ini tidak sesuai');
            }
        }

        $user->save();

        return redirect()->route('profile')->withSuccess('Profile Berhasil Diubah.');
    }


    public function updateGambar(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ], [
            'gambar.required' => 'Upload foto dulu',
        ]);

        if (Auth::user()->gambar) {
            Storage::delete('public/foto/' . Auth::user()->gambar);
        }

        $fotoFile = $request->file('gambar');
        $namaFileUnik = Str::uuid() . '' . time() . '' . $fotoFile->getClientOriginalName();
        $fotoPath = $fotoFile->storeAs('public/foto', $namaFileUnik);

        $up = DB::table('users')
            ->where('email', Auth::user()->email)
            ->update(['gambar' => $namaFileUnik]);

        if ($up != null) {
            return redirect()->route('profile')->withSuccess('Profile Berhasil Diubah.');
        } else {
            return redirect()->route('profile')->withErrors('Profile Gagal Diubah.');
        }
    }


    public function deleteGambar(Request $request)
    {
        $userId = $request->user()->id;
        $user = User::findOrFail($userId);

        if ($user->gambar) {
            Storage::delete('public/foto/' . $user->gambar);
        }

        $user->gambar = null;
        $user->save();

        return redirect()->route('profile')->withSuccess('Profile Berhasil Diubah.');
    }
}


<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    public function postlogin(Request $request)
    {
        $request->validate([
            'email'     => 'required',
            'password'  => 'required',
        ]);

        $data = [
            'email'     => $request->email,
            'password'  => $request->password,
        ];

        if(Auth::attempt($data)) {
            return redirect()->route('dashboard')->with('succes', 'Kamu Berhasil Login');
        } else {
            return redirect()->route('login')->with('failed', 'Email atau Password Salah');
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('succes', 'Kamu Berhasil Logout');
    }
  

// public function submitForm(Request $request)
// {
//     $request->validate([
//         'g-recaptcha' => 'required|recaptcha',
//         'email'     => 'required',
//         'password'  => 'required',
//         //Tambahkan aturan validasi lainnya sesuai kebutuhan Anda
//     ]);
//     $data = [
//         'email'     => $request->email,
//         'password'  => $request->password,
//     ];
//     // Proses formulir jika CAPTCHA berhasil diverifikasi
//     $recaptcha = new \ReCaptcha\ReCaptcha(env('NOCAPTCHA_SECRET'));
//     $response = $recaptcha->verify($request->input('g-recaptcha'), $_SERVER['REMOTE_ADDR']);
//     if ($response->isSuccess() && Auth::attempt($data)) {
//         // Proses formulir disini...
//         // Misalnya, simpan data ke database, kirim email, dll.

//         // Redirect ke halaman sukses dengan pesan sukses
//         return redirect()->route('dashboard')->with('succes', 'Kamu Berhasil Login');
//     } else {
//         // Jika CAPTCHA gagal diverifikasi, kembalikan pengguna ke halaman sebelumnya dengan pesan error
//         return redirect()->route('login')->with('failed', 'Email atau Password Salah');
//     }
// }

}

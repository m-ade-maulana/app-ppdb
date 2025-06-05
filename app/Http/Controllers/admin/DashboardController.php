<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('user/home', ['user' => Auth::user()]);
    }

    public function formulir_siswa()
    {
        return view('user/formulir_siswa', ['user' => Auth::user()]);
    }

    public function formulir_orang_tua()
    {
        return view('user/formulir_orang_tua', ['user' => Auth::user()]);
    }

    public function upload_berkas()
    {
        return view('user/upload_berkas', ['user' => Auth::user()]);
    }

    public function akun()
    {
        return view('user/akun', ['user' => Auth::user()]);
    }
}

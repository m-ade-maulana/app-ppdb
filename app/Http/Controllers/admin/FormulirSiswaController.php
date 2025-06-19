<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\DataSiswa;

class FormulirSiswaController extends Controller
{
    public function index()
    {
        return view('user/formulir_siswa', ['user' => Auth::user()]);
    }

    public function save_siswa(Request $request)
    {
        try {
            $validated = $request->validate([
                'nama_siswa' => 'required|string|max:255',
                'tempat_lahir' => 'required|string|max:255',
                'tanggal_lahir' => 'required|date_format:d/m/Y|before:today',
                'disabilitas' => 'required|string|max:255',
                'nik' => 'required|digits:16|unique:data_siswa,nik',
                'status_tinggal' => 'required|string|max:255',
                'alamat' => 'required|string',
            ]);

            $tanggal_lahir = Carbon::createFromFormat('d/m/Y', $request->tanggal_lahir)->format('Y-m-d');

            DataSiswa::create([
                'user_id' => Auth::id(),
                'nama' => $request->nama_siswa,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'disabilitas' => $request->disabilitas,
                'nik' => $request->nik,
                'status_tinggal' => $request->status_tinggal,
                'alamat' => $request->alamat,
            ]);

            return redirect()->back()->with('success', 'Data siswa berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('failed', 'Data Gagal disimpan' . $e->getMessage());
        }
    }
}

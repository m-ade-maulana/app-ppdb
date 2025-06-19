<?php

namespace App\Http\Controllers\admin;

use App\Models\DataOrangTua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormulirOrangTuaController extends Controller
{
    public function index()
    {
        return view('user/formulir_orang_tua', ['user' => Auth::user()]);
    }
    public function save_orang_tua(Request $request)
    {
        try {
            $validated = $request->validate([
                'nama_ayah' => 'required|string|max:255',
                'status_ayah' => 'required|string|max:255',
                'pekerjaan_ayah' => 'required',
                'penghasilan_ayah' => 'required',
                'nama_ibu' => 'required|string|max:255',
                'status_ibu' => 'required|string|max:255',
                'pekerjaan_ibu' => 'required',
                'penghasilan_ibu' => 'required',
                'nama_wali' => 'required|string|max:255',
                'status_wali' => 'required|string|max:255',
                'pekerjaan_wali' => 'required',
                'penghasilan_wali' => 'required',
            ]);
            DataOrangTua::create(array_merge($validated, [
                'user_id' => Auth::id()
            ]));

            return redirect()->back()->with('success', 'Data Orang Tua berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('failed', 'Data Gagal disimpan' . $e->getMessage());
        }
    }
}

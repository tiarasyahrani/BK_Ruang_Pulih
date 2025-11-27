<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisteredPsikologController extends Controller
{
    public function create()
    {
    return view('auth.register_psikolog'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',

            'no_sipp' => 'required|unique:psikolog',
            'universitas' => 'required',
            'tahun_lulus' => 'required',
            'spesialisasi' => 'required',
            'pengalaman' => 'required|integer',
            'dokumen_sipp' => 'required|file|mimes:pdf,jpg,png',
        ]);

        // BUAT USER
        $user = User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'psikolog',
            'status_akun' => 'nonaktif',
            'is_verified' => false,
        ]);

        // UPLOAD FILE
        $filePath = $request->file('dokumen_sipp')->store('dokumen_sipp', 'public');

        // SIMPAN DI TABEL PSIKOLOG
        DB::table('psikolog')->insert([
            'user_id' => $user->id,
            'nama' => $request->nama,
            'no_sipp' => $request->no_sipp,
            'universitas' => $request->universitas,
            'tahun_lulus' => $request->tahun_lulus,
            'spesialisasi' => $request->spesialisasi,
            'pengalaman' => $request->pengalaman,
            'dokumen_sipp' => $filePath,
            'status_verifikasi' => 'pending',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

return redirect()->route('psikolog.menunggu');
    }
}

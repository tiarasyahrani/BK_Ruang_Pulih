<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthenticatedSessionController extends Controller
{
    // Tampilkan halaman login
    public function create()
    {
        return view('auth.login');
    }

    // Proses login
    public function store(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        // Coba login
        if (!Auth::attempt($credentials)) {
            return back()->withErrors([
                'email' => 'Email atau password salah.'
            ]);
        }

        // Jika login berhasil
        $request->session()->regenerate();

        $user = Auth::user();

        // ======================================
        //               ADMIN
        // ======================================
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        // ======================================
        //              PSIKOLOG
        // ======================================
        if ($user->role === 'psikolog') {

            $psikolog = DB::table('psikolog')->where('user_id', $user->id)->first();

            // Jika tak ada datanya (misal error)
            if (!$psikolog) {
                Auth::logout();
                return redirect('/login')->withErrors(['email' => 'Data psikolog tidak ditemukan.']);
            }

            // Pending → ke halaman menunggu
            if ($psikolog->status_verifikasi === 'pending') {
                return redirect()->route('psikolog.menunggu');
            }

            // Ditolak
            if ($psikolog->status_verifikasi === 'ditolak') {
                return redirect()->route('psikolog.ditolak');
            }

            // Sudah diverifikasi
            return redirect()->route('psikolog.dashboard');
        }

        // ======================================
        //               PASIEN
        // ======================================
        if ($user->role === 'pasien') {
            return redirect()->route('pasien.dashboard');
        }

        // Kalau role tidak dikenal
        Auth::logout();
        return redirect('/login')->withErrors(['email' => 'Role tidak dikenali.']);
    }

    // Logout
    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    // FORM REGISTER PASIEN
    public function createPasien()
    {
return view('auth.register');
    }

    // SIMPAN PASIEN
    public function storePasien(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'pasien',
            'status_akun' => 'aktif',
            'is_verified' => true,
        ]);

        auth()->login($user);

        return redirect('/dashboard/pasien');
    }
}

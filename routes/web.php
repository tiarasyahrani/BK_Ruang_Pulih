<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\RegisteredPsikologController;

/*
|--------------------------------------------------------------------------
| LANDING PAGE
|--------------------------------------------------------------------------
*/

// Root → tampilkan landing page (dashboard.blade)
// Jika sudah login → redirect sesuai role
Route::get('/', function () {

    if (auth()->check()) {
        $role = auth()->user()->role;

        return match ($role) {
            'admin'    => redirect()->route('admin.dashboard'),
            'psikolog' => redirect()->route('psikolog.dashboard'),
            'pasien'   => redirect()->route('pasien.dashboard'),
            default    => redirect()->route('login'),
        };
    }

    return view('dashboard'); // LANDING PAGE
})->name('landing');



/*
|--------------------------------------------------------------------------
| DASHBOARD PER ROLE
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard/admin', function () {
        return view('dashboard.admin');
    })->name('admin.dashboard');

    Route::get('/dashboard/pasien', function () {
        return view('dashboard.pasien');
    })->name('pasien.dashboard');

    Route::get('/dashboard/psikolog', function () {
        return view('dashboard.psikolog');
    })->name('psikolog.dashboard');
});



/*
|--------------------------------------------------------------------------
| PROFILE (BREEZE DEFAULT)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});



/*
|--------------------------------------------------------------------------
| REGISTER PASIEN & PSIKOLOG
|--------------------------------------------------------------------------
*/

// PASIEN REGISTER
Route::middleware('guest')->group(function () {

    Route::get('/register/pasien', [RegisteredUserController::class, 'createPasien'])
        ->name('register.pasien');

    Route::post('/register/pasien', [RegisteredUserController::class, 'storePasien']);
});


// PSIKOLOG REGISTER
Route::middleware('guest')->group(function () {

    Route::get('/register/psikolog', [RegisteredPsikologController::class, 'create'])
        ->name('register.psikolog');

    Route::post('/register/psikolog', [RegisteredPsikologController::class, 'store']);
});


// MENUNGGU VERIFIKASI PSIKOLOG
Route::get('/psikolog/menunggu', function () {
    return view('auth.menunggu_verifikasi');
})->name('psikolog.menunggu');



/*
|--------------------------------------------------------------------------
| AUTH ROUTES (Laravel Breeze)
|--------------------------------------------------------------------------
*/

require __DIR__ . '/auth.php';

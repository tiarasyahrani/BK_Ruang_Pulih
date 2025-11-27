<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Daftar Psikolog - Ruang Pulih</title>
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="h-screen w-screen bg-gray-100 flex transition duration-300 dark:bg-gray-900">

    <div class="flex w-full h-full">

        <div class="w-[38%] flex flex-col justify-center px-10 bg-white dark:bg-gray-800 animate-fadeInLeft">

            <img src="{{ asset('img/logo_ruangpulih.png') }}" class="w-24 mb-4 animate-bounce">

            <h1 class="text-xl font-bold text-gray-900 dark:text-white mb-1 animate-fadeInUp">Daftar Psikolog</h1>
            <p class="text-gray-500 dark:text-gray-300 mb-5 animate-fadeInUp animate-delay-200">
                Lengkapi data untuk melanjutkan registrasi
            </p>

            @if($errors->any())
                <div class="bg-red-100 text-red-700 p-3 rounded mb-4 w-full animate-shake">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('register.psikolog') }}" enctype="multipart/form-data"
                class="w-full animate-fadeInUp animate-delay-300">

                @csrf

                <!-- GRID 2 COLUMN -->
                <div class="grid grid-cols-2 gap-4">

                    <!-- Nama -->
                    <div>
                        <label class="font-medium text-sm dark:text-white">Nama Lengkap</label>
                        <input type="text" name="nama"
                            class="w-full border rounded p-2 mt-1 focus:ring-2 focus:ring-green-400 dark:bg-gray-700 dark:text-white"
                            required>
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="font-medium text-sm dark:text-white">Email</label>
                        <input type="email" name="email"
                            class="w-full border rounded p-2 mt-1 focus:ring-2 focus:ring-green-400 dark:bg-gray-700 dark:text-white"
                            required>
                    </div>

                    <!-- Password -->
                    <div class="relative">
                        <label class="font-medium text-sm dark:text-white">Password</label>
                        <input type="password" name="password" id="passwordField1"
                            class="w-full border rounded p-2 mt-1 pr-10 focus:ring-2 focus:ring-green-400 dark:bg-gray-700 dark:text-white"
                            required>
                    </div>

                    <!-- Confirm Password -->
                    <div class="relative">
                        <label class="font-medium text-sm dark:text-white">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" id="passwordField2"
                            class="w-full border rounded p-2 mt-1 pr-10 focus:ring-2 focus:ring-green-400 dark:bg-gray-700 dark:text-white"
                            required>
                    </div>

                    <!-- No SIPP -->
                    <div>
                        <label class="font-medium text-sm dark:text-white">Nomor SIPP</label>
                        <input type="text" name="no_sipp"
                            class="w-full border rounded p-2 mt-1 focus:ring-2 focus:ring-green-400 dark:bg-gray-700 dark:text-white"
                            required>
                    </div>

                    <!-- Universitas -->
                    <div>
                        <label class="font-medium text-sm dark:text-white">Universitas</label>
                        <input type="text" name="universitas"
                            class="w-full border rounded p-2 mt-1 focus:ring-2 focus:ring-green-400 dark:bg-gray-700 dark:text-white"
                            required>
                    </div>

                    <!-- Tahun Lulus -->
                    <div>
                        <label class="font-medium text-sm dark:text-white">Tahun Lulus</label>
                        <input type="text" name="tahun_lulus"
                            class="w-full border rounded p-2 mt-1 focus:ring-2 focus:ring-green-400 dark:bg-gray-700 dark:text-white"
                            required>
                    </div>

                    <!-- Spesialisasi -->
                    <div>
                        <label class="font-medium text-sm dark:text-white">Spesialisasi</label>
                        <input type="text" name="spesialisasi"
                            class="w-full border rounded p-2 mt-1 focus:ring-2 focus:ring-green-400 dark:bg-gray-700 dark:text-white"
                            required>
                    </div>

                    <!-- Pengalaman -->
                    <div>
                        <label class="font-medium text-sm dark:text-white">Pengalaman (Tahun)</label>
                        <input type="number" name="pengalaman"
                            class="w-full border rounded p-2 mt-1 focus:ring-2 focus:ring-green-400 dark:bg-gray-700 dark:text-white"
                            required>
                    </div>

                    <!-- Upload SIPP -->
                    <div>
                        <label class="font-medium text-sm dark:text-white">Upload Dokumen SIPP</label>
                        <input type="file" name="dokumen_sipp"
                            class="w-full border rounded p-2 mt-1 bg-white dark:bg-gray-700 dark:text-white"
                            required>
                    </div>
                </div>

                <input type="hidden" name="role" value="psikolog">

                <button type="submit"
                    class="w-full bg-green-500 text-white py-2.5 rounded-lg text-sm font-semibold mt-5 hover:bg-green-600 hover:scale-105 transition-transform duration-300">
                    Daftar →
                </button>
            </form>

            <p class="mt-4 text-xs dark:text-gray-300 animate-fadeInUp animate-delay-600">
                Sudah punya akun?
                <a href="/login" class="text-pink-500 font-semibold hover:underline">Masuk di sini</a>
            </p>

        </div>

        <!-- RIGHT SIDE (DIPERKECIL) -->
        <div
            class="w-[82%] bg-gradient-to-br from-green-400 to-pink-400 flex items-center justify-center p-6 dark:from-green-700 dark:to-pink-700">

            <div
                class="bg-transparent rounded-3xl p-6 w-[55%] h-[60%] flex flex-col items-center justify-center shadow-xl animate-fadeInRight">

                <img src="{{ asset('img/homeimg.png') }}"
                    class="w-[75%] object-contain rounded-2xl mb-3 shadow-[0_0_25px_5px_rgba(0,0,0,0.2)] transition-transform duration-500"
                    alt="illustration">

                <h2 class="text-white text-lg font-semibold mb-1">Bergabung Sebagai Psikolog Profesional</h2>
                <p class="text-white text-xs text-center opacity-90">
                    Bantu lebih banyak klien melalui platform yang aman dan nyaman.
                </p>
            </div>
        </div>
    </div>

    <!-- ANIMATIONS -->
    <style>
        @keyframes fadeInLeft {0% {opacity:0; transform: translateX(-30px);} 100% {opacity:1; transform: translateX(0);} }
        @keyframes fadeInRight {0% {opacity:0; transform: translateX(30px);} 100% {opacity:1; transform: translateX(0);} }
        @keyframes fadeInUp {0% {opacity:0; transform: translateY(20px);} 100% {opacity:1; transform: translateY(0);} }
        @keyframes shake {0%,100%{transform:translateX(0);} 25%{transform:translateX(-5px);} 75%{transform:translateX(5px);} }
        @keyframes bounce {0%,100% {transform: translateY(0);} 50% {transform: translateY(-15%);} }

        .animate-fadeInLeft {animation: fadeInLeft 1s ease forwards;}
        .animate-fadeInRight {animation: fadeInRight 1s ease forwards;}
        .animate-fadeInUp {animation: fadeInUp 0.8s ease forwards;}
        .animate-shake {animation: shake 0.5s ease;}
        .animate-bounce {animation: bounce 2s infinite;}
    </style>

</body>

</html>

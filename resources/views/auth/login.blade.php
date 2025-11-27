<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login - Ruang Pulih</title>
    @vite('resources/css/app.css')

    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="h-screen w-screen bg-gray-100 flex transition duration-300 dark:bg-gray-900" id="bodyTheme">


    <div class="flex w-full h-full">

        <!-- LEFT SIDE (DIPERKECIL) -->
        <div class="w-[38%] flex flex-col justify-center px-10 bg-white dark:bg-gray-800 animate-fadeInLeft">
            <img src="{{ asset('img/logo_ruangpulih.png') }}" alt="Ruang Pulih Logo"
                class="w-24 mb-4 animate-bounce" />

            <div class="flex flex-col items-start">
                <h1 class="text-xl font-bold mb-2 text-gray-900 dark:text-white animate-fadeInUp">
                    Selamat Datang Kembali!
                </h1>
                <p class="text-gray-500 dark:text-gray-300 mb-5 animate-fadeInUp animate-delay-200">
                    Silakan login untuk melanjutkan
                </p>
            </div>

            @if($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4 w-full animate-shake">
                {{ $errors->first() }}
            </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="w-full animate-fadeInUp animate-delay-400">
                @csrf

                <!-- EMAIL -->
                <div class="mb-4">
                    <label class="font-medium dark:text-white text-sm">Alamat Email</label>
                    <input type="email" name="email"
                        class="w-full border rounded p-2.5 mt-1 focus:ring-2 focus:ring-green-400 transition dark:bg-gray-700 dark:text-white"
                        value="{{ old('email') }}" required>
                </div>

                <!-- PASSWORD -->
                <div class="mb-4 relative">
                    <label class="font-medium dark:text-white text-sm">Kata Sandi</label>
                    <input type="password" name="password" id="passwordField"
                        class="w-full border rounded p-2.5 mt-1 pr-10 focus:ring-2 focus:ring-green-400 transition dark:bg-gray-700 dark:text-white"
                        required>

                    <span id="togglePassword"
                        class="absolute right-3 top-[42px] text-gray-500 dark:text-gray-300 cursor-pointer">
                        <i class="fa-solid fa-eye"></i>
                    </span>
                </div>

                <div class="flex items-center justify-between mb-3 text-xs">
                    <label class="flex items-center gap-2 dark:text-gray-300">
                        <input type="checkbox" class="h-3.5 w-3.5">
                        Ingat saya
                    </label>
                    <a href="#" class="text-green-600 hover:underline">Lupa Kata Sandi?</a>
                </div>

                <button type="submit"
                    class="w-full bg-green-500 text-white py-2.5 rounded-lg text-sm font-semibold hover:bg-green-600 hover:scale-105 transition-transform duration-300">
                    Masuk →
                </button>
            </form>

            <p class="mt-4 text-xs dark:text-gray-300 animate-fadeInUp animate-delay-600 leading-relaxed">
                Dengan membuat akun, Anda menyetujui <span class="text-green-600">Syarat & Ketentuan</span> dan
                <span class="text-green-600">Kebijakan Privasi</span>
            </p>

            <p class="mt-3 text-xs dark:text-gray-300 animate-fadeInUp animate-delay-800">
                Belum punya akun?
                <a href="{{ route('register.pasien') }}" class="text-pink-500 font-semibold hover:underline">
                    Daftar Sekarang
                </a>
            </p>

            <div class="flex flex-col mt-4 w-full">
                <a href="{{ route('register.psikolog') }}"
                    class="text-center bg-pink-500 text-white p-2.5 rounded-lg text-sm font-semibold hover:bg-pink-600 hover:scale-105 transition-transform duration-300">
                    Daftar sebagai Psikolog
                </a>
            </div>
        </div>

        <!-- RIGHT SIDE (TETAP BESAR, SEDIKIT SAJA DIATUR) -->
        <div
            class="w-[82%] bg-gradient-to-br from-green-400 to-pink-400 flex items-center justify-center relative p-8 dark:from-green-700 dark:to-pink-700">

            <div
                class="bg-transparent rounded-3xl p-8 w-[60%] h-[65%] flex flex-col items-center justify-center shadow-xl animate-fadeInRight">

                <img src="{{ asset('img/homeimg.png') }}"
                    class="w-[85%] object-contain rounded-3xl mb-4 shadow-[0_0_30px_8px_rgba(0,0,0,0.2)] hover:scale-105 transition-transform duration-500"
                    alt="illustration">

                <h2 class="text-white text-lg font-semibold mb-1 animate-fadeInUp">
                    Pengalaman Bimbingan yang Mudah & Nyaman
                </h2>

                <p class="text-white text-xs text-center opacity-90 animate-fadeInUp animate-delay-200">
                    Kelola konsultasi dan kegiatan dengan mudah melalui dashboard yang fleksibel.
                </p>

                <div class="flex gap-2 mt-4 animate-pulse">
                    <div class="w-2 h-2 bg-white rounded-full opacity-60"></div>
                    <div class="w-2 h-2 bg-white rounded-full"></div>
                    <div class="w-2 h-2 bg-white rounded-full opacity-60"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script>
        const passwordField = document.getElementById("passwordField");
        const togglePassword = document.getElementById("togglePassword");

        togglePassword.addEventListener("click", () => {
            const type = passwordField.type === "password" ? "text" : "password";
            passwordField.type = type;

            const icon = togglePassword.querySelector("i");
            icon.classList.toggle("fa-eye");
            icon.classList.toggle("fa-eye-slash");
        });
    </script>

    <!-- ANIMATIONS -->
    <style>
        @keyframes fadeInLeft {0% {opacity:0; transform: translateX(-30px);} 100% {opacity:1; transform: translateX(0);}}
        @keyframes fadeInRight {0% {opacity:0; transform: translateX(30px);} 100% {opacity:1; transform: translateX(0);}}
        @keyframes fadeInUp {0% {opacity:0; transform: translateY(20px);} 100% {opacity:1; transform: translateY(0);}}
        @keyframes shake {0%,100%{transform:translateX(0);} 25%{transform:translateX(-5px);} 75%{transform:translateX(5px);}}
        @keyframes bounce {0%,100% {transform: translateY(0);} 50% {transform: translateY(-15%);} }
        .animate-fadeInLeft {animation: fadeInLeft 1s ease forwards;}
        .animate-fadeInRight {animation: fadeInRight 1s ease forwards;}
        .animate-fadeInUp {animation: fadeInUp 0.8s ease forwards;}
        .animate-shake {animation: shake 0.5s ease;}
        .animate-bounce {animation: bounce 2s infinite;}
    </style>

</body>

</html>

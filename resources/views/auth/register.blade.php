<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Daftar Pasien - Ruang Pulih</title>
    @vite('resources/css/app.css')

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="h-screen w-screen bg-gray-100 flex transition duration-300 dark:bg-gray-900" id="bodyTheme">

    <div class="flex w-full h-full">

        <!-- LEFT SIDE (FORM PENDAFTARAN) -->
        <div class="w-[38%] flex flex-col justify-center px-10 bg-white dark:bg-gray-800 animate-fadeInLeft">

            <img src="{{ asset('img/logo_ruangpulih.png') }}" alt="Ruang Pulih Logo"
                class="w-24 mb-4 animate-bounce" />

            <h1 class="text-xl font-bold mb-1 text-gray-900 dark:text-white animate-fadeInUp">
                Daftar sebagai Pasien
            </h1>
            <p class="text-gray-500 dark:text-gray-300 mb-5 text-sm animate-fadeInUp animate-delay-200">
                Buat akun untuk melanjutkan konsultasi
            </p>

            @if($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-3 w-full animate-shake text-sm">
                {{ $errors->first() }}
            </div>
            @endif

            <form method="POST" action="/register/pasien" class="w-full animate-fadeInUp animate-delay-400">
                @csrf

                <!-- NAMA -->
                <div class="mb-3">
                    <label class="font-medium dark:text-white text-sm">Nama Lengkap</label>
                    <input type="text" name="name"
                        class="w-full border rounded p-2.5 mt-1 focus:ring-2 focus:ring-green-400 transition dark:bg-gray-700 dark:text-white"
                        required>
                </div>

                <!-- EMAIL -->
                <div class="mb-3">
                    <label class="font-medium dark:text-white text-sm">Alamat Email</label>
                    <input type="email" name="email"
                        class="w-full border rounded p-2.5 mt-1 focus:ring-2 focus:ring-green-400 transition dark:bg-gray-700 dark:text-white"
                        required>
                </div>

                <!-- PASSWORD -->
                <div class="mb-3 relative">
                    <label class="font-medium dark:text-white text-sm">Kata Sandi</label>
                    <input type="password" name="password" id="passwordField"
                        class="w-full border rounded p-2.5 mt-1 pr-10 focus:ring-2 focus:ring-green-400 transition dark:bg-gray-700 dark:text-white"
                        required>

                    <span id="togglePassword"
                        class="absolute right-3 top-[42px] text-gray-500 dark:text-gray-300 cursor-pointer">
                        <i class="fa-solid fa-eye"></i>
                    </span>
                </div>

                <!-- PASSWORD CONFIRM -->
                <div class="mb-4">
                    <label class="font-medium dark:text-white text-sm">Konfirmasi Kata Sandi</label>
                    <input type="password" name="password_confirmation"
                        class="w-full border rounded p-2.5 mt-1 focus:ring-2 focus:ring-green-400 transition dark:bg-gray-700 dark:text-white"
                        required>
                </div>

                <button type="submit"
                    class="w-full bg-green-500 text-white py-2.5 rounded-lg text-sm font-semibold hover:bg-green-600 hover:scale-105 transition-transform duration-300">
                    Daftar →
                </button>
            </form>

            <p class="mt-3 text-xs dark:text-gray-300 animate-fadeInUp animate-delay-600">
                Sudah punya akun?
                <a href="/login" class="text-pink-500 font-semibold hover:underline">Masuk Sekarang</a>
            </p>
        </div>

        <!-- RIGHT SIDE -->
        <div
            class="w-[82%] bg-gradient-to-br from-green-400 to-pink-400 flex items-center justify-center p-8 dark:from-green-700 dark:to-pink-700">

            <div class="bg-transparent rounded-3xl p-8 w-[60%] h-[65%] flex flex-col items-center justify-center shadow-xl animate-fadeInRight">

                <img src="{{ asset('img/homeimg.png') }}"
                    class="w-[85%] object-contain rounded-3xl mb-4 shadow-[0_0_30px_8px_rgba(0,0,0,0.2)] hover:scale-105 transition-transform duration-500"
                    alt="illustration">

                <h2 class="text-white text-lg font-semibold mb-1 animate-fadeInUp">
                    Pengalaman Konseling yang Nyaman
                </h2>

                <p class="text-white text-xs text-center opacity-90 animate-fadeInUp animate-delay-200">
                    Mulai perjalanan pemulihan Anda bersama kami.
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
            passwordField.type = passwordField.type === "password" ? "text" : "password";

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

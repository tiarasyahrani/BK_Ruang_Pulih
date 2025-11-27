<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard - Ruang Pulih</title>
    @vite('resources/css/app.css')

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-[#f7f7f7] min-h-screen text-gray-800">

    <!-- NAVBAR -->
    <nav class="w-full fixed top-0 left-0 bg-white/70 backdrop-blur-lg shadow-md border-b border-gray-200 z-50">
        <div class="max-w-7xl mx-auto flex items-center justify-between px-8 py-4">

            <!-- LOGO -->
            <div class="flex items-center gap-2">
                <img src="{{ asset('img/logotanpa_teks.png') }}" class="w-10 h-10" alt="">
            </div>

            <!-- MENU -->
            <div class="hidden md:flex items-center gap-8 text-[15px] font-medium">
                <a href="#" class="hover:text-pink-600 transition">Beranda</a>
                <a href="#" class="hover:text-pink-600 transition">Layanan</a>
                <a href="#" class="hover:text-pink-600 transition">Tentang</a>
                <a href="#" class="hover:text-pink-600 transition">Kontak</a>
            </div>

            <!-- LOGIN BUTTON -->
            <a href="{{ route('login') }}"
               class="px-4 py-2 rounded-lg text-sm bg-pink-500 hover:bg-pink-600 transition text-white shadow-sm">
                Login
            </a>
        </div>
    </nav>



    <!-- HERO SECTION -->
    <section class="pt-32 pb-20 px-10 flex items-center justify-center">
        <div class="max-w-7xl w-full flex flex-col lg:flex-row items-center justify-between">

            <!-- TEXT -->
            <div class="max-w-xl space-y-6 animate-fadeInLeft">
                <p class="uppercase text-sm tracking-widest text-green-600 font-semibold">
                    Ruang Pulih • Mental Health Support
                </p>

                <h1 class="text-5xl font-extrabold leading-tight text-gray-900">
                    Perjalanan <span class="text-green-600">pemulihan</span> Anda
                    dimulai dengan langkah yang <span class="text-pink-600">tepat</span>.
                </h1>

                <p class="text-gray-600 text-md leading-relaxed">
                    Akses layanan konseling profesional, pelacak suasana hati,
                    dan program pemulihan yang dirancang untuk meningkatkan
                    kesejahteraan emosional Anda.
                </p>

                <div class="flex items-center gap-4 pt-4">
                    <a href="{{ route('login') }}"
                       class="bg-green-600 hover:bg-green-700 text-white transition px-6 py-3 rounded-lg font-semibold text-sm shadow-md">
                        Mulai Konsultasi
                    </a>

                    <a href="#"
                       class="flex items-center gap-2 text-gray-700 hover:text-green-700 transition text-sm font-medium">
                        <i class="fa-solid fa-circle-play text-xl"></i> Lihat Demo
                    </a>
                </div>
            </div>


            <!-- IMAGE / MOCKUP -->
            <div class="mt-12 lg:mt-0 animate-fadeInRight">
                <div
                    class="bg-white/60 backdrop-blur-xl border border-gray-200 rounded-2xl
                           shadow-xl overflow-hidden p-4">
                    <img src="{{ asset('img/homeimg.png') }}"
                         class="w-[480px] rounded-xl shadow-lg" alt="Dashboard Mockup">
                </div>
            </div>

        </div>
    </section>
    <!-- FEATURES SECTION -->
<section class="max-w-7xl mx-auto px-10 pb-24 space-y-24">

    <!-- PRIORITY FEATURES -->
    <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
            <h3 class="text-green-700 font-bold text-sm uppercase tracking-wide">
                Prioritas Pemulihan
            </h3>
            <h2 class="text-3xl font-extrabold text-gray-900 mt-2">
                Bantu Anda mengatur <span class="text-pink-600">hal yang paling penting</span>
            </h2>
            <p class="text-gray-600 mt-4 leading-relaxed">
                Ruang Pulih membantu menentukan prioritas emosi, tugas terapi,
                dan aktivitas yang berpengaruh besar terhadap kesehatan mental Anda.
            </p>

            <button class="mt-6 px-5 py-2.5 bg-gray-900 text-white rounded-lg text-sm hover:bg-gray-800">
                Lihat Selengkapnya →
            </button>
        </div>

        <div class="bg-white shadow-xl rounded-2xl p-6 border border-gray-200">
            <ul class="space-y-4 text-[15px]">
                <li class="flex items-center gap-3">
                    <i class="fa-solid fa-heart-circle-check text-green-600 text-xl"></i>
                    Evaluasi Mood Harian
                </li>
                <li class="flex items-center gap-3">
                    <i class="fa-solid fa-list-check text-blue-500 text-xl"></i>
                    Rekomendasi Aktivitas Pemulihan
                </li>
                <li class="flex items-center gap-3">
                    <i class="fa-solid fa-brain text-pink-500 text-xl"></i>
                    Prioritas Kesehatan Mental Mingguan
                </li>
                <li class="flex items-center gap-3">
                    <i class="fa-solid fa-chart-line text-gray-700 text-xl"></i>
                    Tracking Perkembangan Emosi
                </li>
            </ul>
        </div>
    </div>



    <!-- COLLABORATION -->
    <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
            <h3 class="text-blue-700 font-bold text-sm uppercase tracking-wide">
                Kolaborasi
            </h3>
            <h2 class="text-3xl font-extrabold text-gray-900 mt-2">
                Terhubung langsung dengan <span class="text-green-600">psikolog Anda</span>
            </h2>
            <p class="text-gray-600 mt-4 leading-relaxed">
                Anda dapat berdiskusi, berbagi catatan, dan mendapatkan insight dari
                psikolog yang mendampingi proses pemulihan Anda.
            </p>

            <button class="mt-6 px-5 py-2.5 bg-gray-900 text-white rounded-lg text-sm hover:bg-gray-800">
                Lihat Selengkapnya →
            </button>
        </div>

        <div class="bg-white shadow-xl rounded-2xl p-6 border border-gray-200">
            <img src="{{ asset('img/psikolog.png') }}"
                 class="rounded-xl w-full shadow-md"
                 alt="Kolaborasi Psikolog">
        </div>
    </div>



    <!-- ALL FEATURES -->
    <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
            <h3 class="text-pink-600 font-bold text-sm uppercase tracking-wide">
                Fitur Lengkap
            </h3>
            <h2 class="text-3xl font-extrabold text-gray-900 mt-2">
                Semua fitur yang <span class="text-green-600">membantu perjalanan</span> Anda
            </h2>
            <p class="text-gray-600 mt-4 leading-relaxed">
                Ruang Pulih menyediakan berbagai fitur yang dirancang untuk membuat
                proses pemulihan Anda lebih terarah, nyaman, dan mudah dijalani.
            </p>

            <button class="mt-6 px-5 py-2.5 bg-gray-900 text-white rounded-lg text-sm hover:bg-gray-800">
                Lihat Selengkapnya →
            </button>
        </div>

        <div class="grid grid-cols-2 gap-6">

            <div class="bg-white shadow-md p-5 rounded-xl border border-gray-200">
                <p class="font-semibold text-gray-900">Mood Tracker</p>
                <p class="text-sm text-gray-600 mt-2">
                    Pantau perubahan suasana hati setiap hari.
                </p>
            </div>

            <div class="bg-white shadow-md p-5 rounded-xl border border-gray-200">
                <p class="font-semibold text-gray-900">Riwayat Konseling</p>
                <p class="text-sm text-gray-600 mt-2">
                    Lihat catatan sesi dan rekomendasi psikolog.
                </p>
            </div>

            <div class="bg-white shadow-md p-5 rounded-xl border border-gray-200">
                <p class="font-semibold text-gray-900">Program Pemulihan</p>
                <p class="text-sm text-gray-600 mt-2">
                    Modul terapi mandiri yang bisa dilakukan kapan saja.
                </p>
            </div>

            <div class="bg-white shadow-md p-5 rounded-xl border border-gray-200">
                <p class="font-semibold text-gray-900">Konsultasi Online</p>
                <p class="text-sm text-gray-600 mt-2">
                    Chat atau video call dengan psikolog profesional.
                </p>
            </div>

        </div>
    </div>

</section>





    <!-- ANIMATIONS -->
    <style>
        @keyframes fadeInLeft {
            0% { opacity: 0; transform: translateX(-30px); }
            100% { opacity: 1; transform: translateX(0); }
        }
        @keyframes fadeInRight {
            0% { opacity: 0; transform: translateX(30px); }
            100% { opacity: 1; transform: translateX(0); }
        }
        .animate-fadeInLeft { animation: fadeInLeft .8s ease; }
        .animate-fadeInRight { animation: fadeInRight .8s ease; }
    </style>

</body>
</html>

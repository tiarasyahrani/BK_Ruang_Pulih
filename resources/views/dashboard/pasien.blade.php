<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Pasien - Ruang Pulih</title>
    @vite('resources/css/app.css')

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-[#f7f7f7] min-h-screen text-gray-800">

    <!-- NAVBAR -->
    <nav class="w-full fixed top-0 left-0 bg-white/70 backdrop-blur-lg shadow-md border-b border-gray-200 z-50">
        <div class="max-w-7xl mx-auto flex items-center justify-between px-8 py-4">

            <!-- LOGO (tanpa teks) -->
            <div class="flex items-center">
                <img src="{{ asset('img/logotanpa_teks.png') }}" class="w-14 h-14" alt="">
            </div>

            <!-- MENU -->
            <div class="hidden md:flex items-center gap-8 text-[15px] font-medium">
                <a href="#" class="hover:text-pink-600 transition">Beranda</a>
                <a href="#" class="hover:text-pink-600 transition">Konsultasi</a>
                <a href="#" class="hover:text-pink-600 transition">Riwayat</a>
                <a href="#" class="hover:text-pink-600 transition">Bantuan</a>
            </div>

            <!-- USER -->
            <div class="flex items-center gap-4">
                <span class="text-sm text-gray-700">{{ auth()->user()->email }}</span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button
                        class="px-4 py-2 rounded-lg text-sm bg-pink-500 hover:bg-pink-600 transition text-white shadow-sm">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>



    <!-- HERO SECTION -->
    <section class="pt-32 pb-20 px-10 flex items-center justify-center">
        <div class="max-w-7xl w-full flex flex-col lg:flex-row items-center justify-between">

            <!-- TEXT -->
            <div class="max-w-xl space-y-6 animate-fadeInLeft">
                <p class="uppercase text-sm tracking-widest text-green-600 font-semibold">
                    Dashboard Pasien • Ruang Pulih
                </p>

                <h1 class="text-5xl font-extrabold leading-tight text-gray-900">
                    Kelola <span class="text-green-600">kesehatan mental</span> Anda
                    dengan pendampingan <span class="text-pink-600">profesional</span>
                </h1>

                <p class="text-gray-600 text-md leading-relaxed">
                    Ruang Pulih membantu Anda mengatur jadwal konseling, melihat perkembangan emosi,
                    dan mengelola kegiatan pemulihan dengan nyaman dan mudah.
                </p>

                <div class="flex items-center gap-4 pt-4">
                    <a href="#"
                       class="bg-green-600 hover:bg-green-700 text-white transition px-6 py-3 rounded-lg font-semibold text-sm shadow-md">
                        Mulai Konsultasi
                    </a>

                    <a href="#"
                       class="flex items-center gap-2 text-gray-700 hover:text-green-700 transition text-sm font-medium">
                        <i class="fa-solid fa-circle-play text-xl"></i> Lihat Panduan
                    </a>
                </div>
            </div>


            <!-- IMAGE -->
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

<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SIPETIR - Kecamatan Batuputih')</title>
    <meta name="description"
        content="SIPETIR (Sistem Informasi Pelayanan Terpadu Kecamatan Batuputih) - One Stop Service untuk pelayanan publik yang cepat, transparan, dan terintegrasi.">

    <!-- Tailwind CSS from CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <script>
        // Konfigurasi custom color untuk Tailwind CSS
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            '50': '#eff9f8',
                            '100': '#dcf2f1',
                            '200': '#bde5e2',
                            '300': '#91d3cd',
                            '400': '#62b8b1',
                            '500': '#439e97',
                            '600': '#36817b',
                            '700': '#2e6a65',
                            '800': '#285651',
                            '900': '#244945',
                            '950': '#132c2a',
                        },
                    }
                }
            }
        }
    </script>
    <style>
        /* Small custom styles for smooth animations and gradients */
        .gradient-bg {
            background-image: linear-gradient(120deg, #f0fdfa 0%, #e0f2fe 100%);
        }

        .feature-card:hover .feature-icon {
            transform: scale(1.1) rotate(-5deg);
        }
    </style>
</head>

<body class="font-inter bg-slate-50 text-slate-800 antialiased">

    <!-- Header / Navbar -->
    <header class="bg-white/80 backdrop-blur-lg sticky top-0 z-50 border-b border-slate-200">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="flex items-center gap-3">
                <!-- Logo -->
                <div
                    class="w-10 h-10 bg-primary-600 rounded-lg flex items-center justify-center text-white font-bold text-xl shadow-md">
                    S
                </div>
                <div>
                    <h1 class="text-xl font-bold text-primary-700">SIPETIR</h1>
                    <p class="text-xs text-slate-500 -mt-1">Kec. Batuputih</p>
                </div>
            </a>
            <nav class="hidden md:flex items-center gap-6">
                <a href="/#layanan" class="text-slate-600 hover:text-primary-600 transition duration-300">Layanan</a>
                <a href="/#tentang" class="text-slate-600 hover:text-primary-600 transition duration-300">Tentang</a>
                <a href="/layanan-bumdes" class="text-slate-600 hover:text-primary-600 transition duration-300">Info
                    BUMDes</a>
            </nav>
            <a href="/login"
                class="bg-primary-600 text-white px-5 py-2.5 rounded-lg shadow-sm hover:bg-primary-700 transition duration-300 text-sm font-semibold">
                Masuk
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-slate-200 mt-20">
        <div class="container mx-auto px-6 py-8 text-center text-slate-500">
            <p>&copy; {{ date('Y') }} SIPETIR - Kecamatan Batuputih. All rights reserved.</p>
            <p class="text-sm mt-1">Inovasi digital untuk pelayanan publik yang lebih baik.</p>
        </div>
    </footer>

</body>

</html>

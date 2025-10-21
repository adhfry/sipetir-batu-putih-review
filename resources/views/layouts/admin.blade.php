<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') - SIPETIR</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
    <!-- Script untuk Chart (jika dibutuhkan nanti) -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-slate-100 antialiased">
    <div class="flex h-screen bg-slate-100">
        <!-- Sidebar -->
        <aside class="flex flex-col w-64 bg-white shadow-lg transition-transform duration-300" id="sidebar">
            <div class="flex items-center justify-center h-20 border-b">
                <a href="/dashboard">
                    <img src="{{ asset('img/logo.jpg') }}" alt="Logo SIPETIR" class="h-10">
                </a>
            </div>
            <nav class="flex-grow mt-5">
                <a href="/dashboard"
                    class="flex items-center px-6 py-3 text-slate-800 font-bold {{ request()->is('dashboard') ? 'bg-slate-200' : 'hover:bg-slate-100' }}">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    Dashboard
                </a>
                <a href="/laporan-desa"
                    class="flex items-center mt-2 px-6 py-3 text-slate-600 {{ request()->is('laporan-desa') ? 'bg-slate-200 font-bold' : 'hover:bg-slate-100' }}">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                    Laporan Desa
                </a>
                <a href="/laporan-bumdes"
                    class="flex items-center mt-2 px-6 py-3 text-slate-600 {{ request()->is('laporan-bumdes') ? 'bg-slate-200 font-bold' : 'hover:bg-slate-100' }}">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                        </path>
                    </svg>
                    Laporan BUMDes
                </a>
                <a href="/layanan-dukcapil" class="flex items-center mt-2 px-6 py-3 text-slate-600 hover:bg-slate-100">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 012-2h4a2 2 0 012 2v1m-4 0h4">
                        </path>
                    </svg>
                    Layanan Dukcapil
                </a>
                <a href="/manajemen-pengguna"
                    class="flex items-center mt-2 px-6 py-3 text-slate-600 {{ request()->is('manajemen-pengguna') ? 'bg-slate-200 font-bold' : 'hover:bg-slate-100' }}">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M15 21a6 6 0 00-9-5.197M15 21a6 6 0 006-5.197M12 12a4 4 0 110-8 4 4 0 010 8z">
                        </path>
                    </svg>
                    Manajemen Pengguna
                </a>
            </nav>
        </aside>
        <!-- Main content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="flex justify-between items-center p-4 sm:p-6 bg-white border-b">
                <div class="flex items-center">
                    <button id="menu-button" class="md:hidden mr-4 text-slate-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <h1 class="text-xl sm:text-2xl font-bold text-slate-800">@yield('page-title', 'Dashboard')</h1>
                </div>
                <div class="flex items-center">
                    <span class="hidden sm:inline mr-3 font-medium text-slate-700">Selamat Datang, Admin!</span>
                    <a href="/" class="text-sm font-semibold text-primary-600 hover:underline">Keluar</a>
                </div>
            </header>
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-100 p-4 sm:p-6">
                @yield('content')
            </main>
        </div>
    </div>
    <script>
        const menuButton = document.getElementById('menu-button');
    const sidebar = document.getElementById('sidebar');

    menuButton.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
        sidebar.classList.toggle('absolute');
        sidebar.classList.toggle('z-20');
        sidebar.classList.toggle('h-full');
    });
    </script>
</body>

</html>